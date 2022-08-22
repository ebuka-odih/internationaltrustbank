<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\CardRequest;
use App\Notifications\FundAccount;
use App\RequestCard;
use App\Rules\MatchOldPassword;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{

    public function dashboard()
    {
        $deposits = Deposit::all()->count();
        $withdrawal = Withdrawal::all()->count();
        $users = User::all()->where('admin', 0)->count();
        $transfer = Withdrawal::all()->where('status', 1)->count();
        $money_transferred = Withdrawal::select('amount')->where('status', 1)->sum('amount');
        $deposits = Deposit::all()->where('status', 1)->count();
        return view('admin.dashboard', compact('deposits','withdrawal', 'users', 'transfer', 'deposits', 'money_transferred'));
    }

    public function password()
    {
        return view('admin.security');
    }

    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->back()->with('success', "Password Updated Successfully");
    }

    public function store_admin(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'account_type' => 'required',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->pass = $request->password;
        $user->status = 1;
        $user->admin = 1;
        $user->save();
        $this->autoCreate($user->id, $request['account_type']);
        return redirect()->route('admin.admins');
    }

    public function edit_admin($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit-admin', compact('user'));
    }

    public function update_admin(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $user = User::findOrFail($id);
        $data = $this->getUpdateData($request);
        $user->update($data);
        $user->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('admin.admins');
    }

    protected function getUpdateData(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'account_type' => 'required',
        ];
        return $request->validate($rules);
    }


    public function user_detail($id)
    {
        $user_details = User::findOrFail($id);
        $user_deposit = User::with('transactions')->findOrFail($id);
        return view('admin.user-details', compact('user_details', 'user_deposit'));
    }


    public function fund_account(Request $request, $id)
    {
        $add_amt = $request->input('amount');
        $user = User::findOrFail($id);
        $account = Account::whereUserId($id)->first();
        $account->balance += $add_amt;
        $account->balance2 += $add_amt;
        $data = [ 'account' => $account, 'add_amt' => $add_amt, 'user' => $user];
//        $user->notify(new FundAccount($data))->toMail($user->email);
        Notification::route('mail', $user->email)->notify(new FundAccount($data));
        $account->save();
        return redirect()->back()->with('fund_success', "Account has been funded successfully");

    }
    public function defund_account(Request $request, $id)
    {
        $add_amt = $request->input('amount');
//        $user = User::findOrFail($id);
        $account = Account::whereUserId($id)->first();
        $account->balance -= $add_amt;
        $account->balance2 -= $add_amt;

        $account->save();
        return redirect()->back()->with('defund_account', "Account has been defunded successfully");

    }



    public function approve_user($id)
    {
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
        return redirect()->back()->with('success', "User Has Been Verified");
    }

    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', "User Deleted");
    }

    public function edit_user($id)
    {
        $user_details = User::findOrFail($id);
        return view('admin.edit-user', compact('user_details'));
    }


    public function cards()
    {
        $cards = RequestCard::all();
        return view('admin.cards', compact('cards'));
    }

    public function delete_card($id)
    {
        $card = RequestCard::findOrFail($id);
        $card->delete();
        return redirect()->back();
    }

    public function reject_card($id)
    {
        $card = RequestCard::findOrFail($id);
        $card->status = 1;
        $card->save();
        return redirect()->back();
    }

    public function sendSMS()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
        $client = new \Nexmo\Client($basic);

        $receiverNumber = "+2349039837495";
        $message = "Checking my bank SMS";

        $message = $client->message()->send([
            'to' => $receiverNumber,
            'from' => 'Vonage APIs',
            'text' => $message
        ]);
        return "SMS Sent";
    }

}
