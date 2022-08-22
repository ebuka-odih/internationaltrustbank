<?php

namespace App\Http\Controllers;

use App\Account;
use App\Mail\CreditAlert;
use App\Mail\DebitAlert;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{


    public function withdrawHistory()
    {
        $transactions = Withdrawal::whereUserId(\auth()->id())->latest()->paginate(10);
        return view('dashboard.transfer-history', compact('transactions'));
    }




    public function process($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.process', compact('with_dt'));
    }




    public function testSMS()
    {
        $account = app('SMSFactor\Message');
        $response = $account->send([
            'to' => '+2347048933027',
            'text' => 'Have you ever danced with the devil in the pale moonlight ???'
        ]);
        print_r($response->getJson());
    }









}
