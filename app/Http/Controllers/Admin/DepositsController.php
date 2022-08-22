<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\ApprovedDeposit;
use App\Mail\DeclinedDeposit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function Symfony\Component\String\u;

class DepositsController extends Controller
{
    //
    public function deposits()
    {
        $deposits = Deposit::all();
        return view('admin.deposits', compact('deposits'));
    }

    public function approveDeposit($id)
    {

        $deposit = Deposit::findOrFail($id);
        if ($deposit->status == 1){
            $acct = Account::findOrFail($deposit->user_id);
            $deposit->status = 1;
            $acct->balance += $deposit->amount;
            $deposit->save();
            $acct->save();
            $data = ['deposit' => $deposit];
            Mail::to($deposit->user->email)->send(new ApprovedDeposit($data));
            return redirect()->back()->with('success', "Approved Successfully");
        }

    }

    public function delineDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->status = -1;
        $deposit->save();
        $data = ['deposit' => $deposit];
        Mail::to($deposit->user->email)->send(new DeclinedDeposit($data));
        return redirect()->back()->with('decline', "Deposit Declined Successfully");
    }

}
