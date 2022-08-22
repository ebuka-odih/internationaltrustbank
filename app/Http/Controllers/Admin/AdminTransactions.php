<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Controllers\Controller;
use App\Notifications\ATCCode;
use App\Notifications\NSBCode;
use App\Notifications\OTPCode;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

//use Illuminate\Http\Request;

class AdminTransactions extends Controller
{
    public function nsbTransfer()
    {
        $nsb_transfer = Withdrawal::where('nsb_transfer', 1)->get();
        return view('admin.transfers.nsb-transfer', compact('nsb_transfer'));
    }

    public function nsbTransferDetails($id)
    {
        $transfer = Withdrawal::findOrFail($id);
        return view('admin.transfers.nsb-details', compact('transfer'));
    }


    public function obankTransfer()
    {
        $obank_transfer = Withdrawal::where('obank_transfer', 1)->get();
        return view('admin.transfers.obank', compact('obank_transfer'));
    }
    public function obankTransferDetails($id)
    {
        $transfer = Withdrawal::findOrFail($id);
        return view('admin.transfers.obank-details', compact('transfer'));
    }

    public function wireTransfer()
    {
        $transfer = Withdrawal::where('wire_transfer', 1)->latest()->get();
        return view('admin.transfers.wire-transfers', compact('transfer'));
    }

    public function wireTransferDetails($id)
    {
        $transfer = Withdrawal::findOrFail($id);
        return view('admin.transfers.wtransfer-details', compact('transfer'));
    }


    public function admin_nsb(Request $request, $id)
    {

        $wit = Withdrawal::findOrFail($id);
        $user = User::findOrFail($wit->user_id);
        $user_email = $user->email;
        $wit->admin_nsb_code = $request->get('admin_nsb_code');
        $data = ['user' => $user, 'wit' => $wit];
        Notification::route('mail', $user_email)->notify(new NSBCode($data));
        $wit->save();
        return redirect()->back()->with('admin_nsb_code', "NSB Code Sent Successfully");
    }
    public function admin_otp(Request $request, $id)
    {
        $wit = Withdrawal::findOrFail($id);
        $user = User::findOrFail($wit->user_id);
        $user_email = $user->email;
        $wit->admin_otp = $request->get('admin_otp');
        $data = ['user' => $user, 'wit' => $wit];
        Notification::route('mail', $user_email)->notify(new OTPCode($data));
        $wit->save();
        return redirect()->back()->with('admin_nsb_code', "OTP Code Sent Successfully");
    }
    public function admin_atc(Request $request, $id)
    {
        $wit = Withdrawal::findOrFail($id);
        $user = User::findOrFail($wit->user_id);
        $user_email = $user->email;
        $wit->admin_atc_code = $request->get('admin_atc_code');
        $data = ['user' => $user, 'wit' => $wit];
        Notification::route('mail', $user_email)->notify(new ATCCode($data));
        $wit->save();
        return redirect()->back()->with('admin_nsb_code', "ATC Code Sent Successfully");
    }


}
