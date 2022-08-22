<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PaymentMethod;
use App\User;
use Illuminate\Http\Request;

class AdminPaymentMethod extends Controller
{
    public function payment_method()
    {
        $payment_method = PaymentMethod::all();
        return view('admin.payment-method.list', compact('payment_method'));
    }
    public function addMethod()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.payment-method.add', compact('users'));
    }

    public function storeBankMethod(Request $request)
    {
        $request->validate([
            'bank_name' => 'required',
            'acct_name' => 'required',
            'acct_number' => 'required',
            'swift_code' => 'nullable',
            'routine_number' => 'nullable',
            'amount_1' => 'nullable',
            'amount_2' => 'nullable',
            'amount_3' => 'nullable',
//            'btc_wallet' => 'nullable',
        ]);

        $payment_method = new PaymentMethod();
        $payment_method->bank_name = $request->bank_name;
        $payment_method->acct_number = $request->acct_number;
        $payment_method->acct_name = $request->acct_name;
        $payment_method->swift_code = $request->swift_code;
        $payment_method->routine_number = $request->routine_number;
        $payment_method->amount_1 = $request->amount_1;
        $payment_method->amount_2 = $request->amount_2;
        $payment_method->amount_3 = $request->amount_3;
        $payment_method->user_id = $request->user_id;
        $payment_method->payment_type = 1;
        $payment_method->save();
        return redirect()->route('admin.payment_method');
    }

    public function bitcoinMethod()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.payment-method.bitcoin', compact('users'));
    }

    public function storeBtcMethod(Request $request)
    {
        $request->validate([
            'amount_1' => 'nullable',
            'amount_2' => 'nullable',
            'amount_3' => 'nullable',
            'btc_wallet' => 'nullable',
        ]);

        $payment_method = new PaymentMethod();
        $payment_method->amount_1 = $request->amount_1;
        $payment_method->amount_2 = $request->amount_2;
        $payment_method->amount_3 = $request->amount_3;
        $payment_method->btc_wallet = $request->btc_wallet;
        $payment_method->user_id = $request->user_id;
        $payment_method->payment_type = 2;
        $payment_method->save();
        return redirect()->route('admin.payment_method');
    }

    public function instantTransfer()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.payment-method.instant-transfer', compact('users'));
    }

    public function storeInstantTransfer(Request $request)
    {
        $request->validate([
            'instant_type' => 'required',
            'country' => 'nullable',
            'state' => 'nullable',
            'name' => 'nullable',
            'amount_1' => 'nullable',
            'amount_2' => 'nullable',
            'amount_3' => 'nullable',
        ]);

        $payment_method = new PaymentMethod();
        $payment_method->instant_type = $request->instant_type;
        $payment_method->country = $request->country;
        $payment_method->state = $request->state;
        $payment_method->name = $request->name;
        $payment_method->amount_1 = $request->amount_1;
        $payment_method->amount_2 = $request->amount_2;
        $payment_method->amount_3 = $request->amount_3;
        $payment_method->user_id = $request->user_id;
        $payment_method->payment_type = 3;
        $payment_method->save();
        return redirect()->route('admin.payment_method');
    }

    public function deleteMethod($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);
        $payment_method->delete();
        return redirect()->back();
    }


}
