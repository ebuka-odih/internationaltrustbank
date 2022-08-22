<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentMethodController extends Controller
{

        public function payment_method()
        {
            $payment_method = PaymentMethod::whereUserId(\auth()->id())->get();
            return view('dashboard.deposit.list-methods', compact('payment_method'));
        }

        public function PaymentMethodDetails($id)
        {
            $payment_method = PaymentMethod::findOrFail($id);
            return view('dashboard.deposit.details', compact('payment_method'));
        }

        public function storeDeposit(Request $request)
        {
            $data = $this->getData($request);
            $data['user_id'] = Auth::id();
            $deposit = PaymentMethod::create($data);
            $data = ['withdraw' => $deposit];
//            Mail::to(\auth()->user()->email)->send(new RequestDeposit($dep));
//            Mail::to('admin@nsbplc.com')->send(new RequestDeposit($dep));
            return redirect()->route('user.payment', $deposit->id);
        }

        protected function getData(Request $request)
        {
            $rules = [
                'amount' => 'required',
                'payment_method' => 'required',
                'note' => 'nullable',
            ];
            return $request->validate($rules);
        }

        public function payment($id)
        {
            $deposit = PaymentMethod::findOrFail($id);
            return view('dashboard.payment', compact('deposit'));
        }
}
