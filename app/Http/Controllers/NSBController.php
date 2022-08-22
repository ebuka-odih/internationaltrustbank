<?php

namespace App\Http\Controllers;

use App\Account;
use App\Mail\CreditAlert;
use App\Mail\DebitAlert;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class NSBController extends Controller
{
    //
    public function nsbTransfer()
    {
        return view('dashboard.acu-transfer');
    }

    public function storeNsbTransfer(Request $request)
    {
        $data = $this->getNsbData($request);
        if($request->trans_type == "nsb_transfer"){
            $account_number = $request->input('acct_number');
            $user_acct = Account::where('account_number', $account_number)->first();

            if ($user_acct){
                if ($data['amount'] > Auth::user()->account->balance){
                    return redirect()->back()->with('declined', 'Insufficient Balance');
                }
                if ($account_number != auth()->user()->account->account_number){
                    $data['user_id'] = Auth::id();
                    $data['account_id'] = Auth::user()->account->id;
//                    $data['nsb_transfer'] = 1;
//                    $data['status'] = 1;
                    $data['nsb_transfer'] = 1;
                    $withdrawal = Withdrawal::create($data);
                }else{
                    return redirect()->back()->with('illicit', 'Illicit Transaction');
                }
            }else{
                return redirect()->back()->with('not_found', "Sorry! No Such Account Number");
            }
        }
        return redirect()->route('user.processNsb', $withdrawal->id)->with('success', "Transfer Successful");
    }

    protected function getNsbData(Request $request)
    {
        $rules = [
            'amount' => 'required',
            'acct_number' => 'required',
            'note' => 'nullable',
            'trans_type' => 'required',
            'from' => 'required',
            'rep_name' => 'required',
        ];
        return $request->validate($rules);
    }

    public function processNsb($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.process-nsb', compact('with_dt'));
    }
    public function processFinal($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.process-final-nsb', compact('with_dt'));
    }

    public function nsb_code($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.nsb_code', compact('with_dt'));
    }

    public function nsb_store(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
        if ($request->nsb_code == $withdrawal->admin_nsb_code)
        {
            $withdrawal->nsb_code = $request->get('nsb_code');
            $withdrawal->status = 1;
            $withdrawal->save();

            $account_number = $request->input('acct_number');
            $user_acct = Account::where('account_number', $account_number)->first();

            if ($user_acct){
                $user_acct->balance += $withdrawal->amount;
                $user_acct->save();
                if ($withdrawal->status == 1){

                    $new_balance = Auth::user()->account->balance -= $withdrawal->amount;
                    Auth::user()->account->update(['balance' => $new_balance]);

                    $vat = $withdrawal->amount * 0.5 / 100;

                    $withdrawal->update(['vat' => $vat, 'debit' => 1]);
                    auth()->user()->account->balance -= $vat;
                    auth()->user()->save();
                    $withdrawal->save();

                    $user = Auth::user();
                    $mail_data = ['user' => $user, 'transaction' => $withdrawal];
                    $credit_data = ['user' => $user, 'transaction' => $withdrawal];

                    Mail::to($user_acct->user->email)->send(new CreditAlert($credit_data));
                    Mail::to($user->email)->send(new DebitAlert($mail_data));
                }

            }
            return redirect()->route('user.processFinal', $withdrawal->id);
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right digits.");

    }


    public function withdrawal_details($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        if ( $with_dt->nsb_code == null){
            return redirect()->route('user.nsb_code', $with_dt->id);
        }
        return view('dashboard.transaction-details', compact('with_dt'));
    }


}
