<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Mail\RequestDeposit;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    //
    public function deposits()
    {
        $deposits = Deposit::whereUserId(\auth()->id())->latest()->paginate(10);
        return view('dashboard.deposit.deposits', compact('deposits'));
    }


}
