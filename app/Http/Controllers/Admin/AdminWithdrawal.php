<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\ATCCODE;
use App\Notifications\OTPCODE;
use App\Notifications\OTPNotify;
use App\Notifications\TRNCODE;
use App\Transactions;
use App\User;
use App\Withdrawal;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;


class AdminWithdrawal extends Controller
{

    public function withdrawals()
    {
        $withdrawals = Transactions::all();
        return view('admin.withdrawals', compact('withdrawals'));
    }

    public function delete_tran($id)
    {
        $trans = Transactions::findOrFail($id);
        $trans->delete();
        return redirect()->back()->with('delete', "Transaction Deleted Successfully");
    }

    public function withdrawal_details($id)
    {
        $withdrawal = Transactions::findOrFail($id);
        return view('admin.withdrawal_details', compact('withdrawal'));
    }

    public function admin_atc(Request $request, $id)
    {

        $wit = Transactions::findOrFail($id);
        $user = User::findOrFail($wit->user_id);
        $user_email = $user->email;
        $wit->admin_atc_code = $request->get('admin_atc_code');
        $data = ['user' => $user, 'wit' => $wit];
        Notification::route('mail', $user_email)->notify(new ATCCODE($data));
        $wit->save();
        return redirect()->back()->with('admin_atc_code', "ATC Code Sent Successfully");
    }
    public function admin_otp(Request $request, $id)
    {
        $otp = Transactions::findOrFail($id);
        $user = User::findOrFail($otp->user_id);
        $user_email = $user->email;
        $otp->admin_otp = $request->get('admin_otp');

        $data = ['user' => $user, 'otp' => $otp];
        Notification::route('mail', $user_email)->notify(new OTPCODE($data));
        $otp->save();
        return redirect()->back()->with('admin_otp', "OTP Code Sent Successfully");
    }

    public function admin_trn(Request $request, $id)
    {
        $trn = Transactions::findOrFail($id);
        $user = User::findOrFail($trn->user_id);
        $user_email = $user->email;
        $trn->admin_trn = $request->get('admin_trn');

        $data = ['user' => $user, 'trn' => $trn];
        Notification::route('mail', $user_email)->notify(new TRNCODE($data));
        $trn->save();
        return redirect()->back()->with('admin_trn', "TRN Code Sent Successfully");
    }

//    public function opt_code(Request $request, $id)
//    {
//
//         $wit = Withdrawal::findOrFail($id);
//         $user = User::findOrFail($wit->user_id);
//         return $user;
//    }


}
