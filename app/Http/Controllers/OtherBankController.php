<?php

namespace App\Http\Controllers;

use App\Account;
use App\Mail\CreditAlert;
use App\Mail\DebitAlert;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OtherBankController extends Controller
{
    //
        public function obankTransfer()
        {
            return view('dashboard.other-bank-transfer');
        }

        public function storeObankTransfer(Request $request)
        {
            $data = $this->getData($request);
            if($request->trans_type == "obank_transfer"){
                if ($data['amount'] > Auth::user()->account->balance){
                    return redirect()->back()->with('declined', 'Insufficient Balance');
                }
                $data['user_id'] = Auth::id();
                $data['from'] = Auth::user()->account->account_number;
                $data['obank_transfer'] = 1;
                $data = Withdrawal::create($data);
            }
            return redirect()->route('user.processObank', $data->id)->with('success', "Transfer Successful");
        }

        protected function getData(Request $request)
        {
            $rules = [
                'amount' => 'required',
                'acct_number' => 'required',
                'bank_name' => 'required',
                'rep_name' => 'required',
                'note' => 'nullable',
                'trans_type' => 'required',
                'from' => 'required',
            ];
            return $request->validate($rules);
        }

        public function processObank($id)
        {
            $with_dt = Withdrawal::findOrFail($id);
            return view('dashboard.process-obank', compact('with_dt'));
        }

        public function obank_code($id)
        {
            $with_dt = Withdrawal::findOrFail($id);
            return view('dashboard.obank_code', compact('with_dt'));
        }

        public function obank_store(Request $request)
        {
            $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
            if ($request->nsb_code == $withdrawal->admin_nsb_code)
            {
                $withdrawal->nsb_code = $request->get('nsb_code');
                $withdrawal->save();
                return redirect()->route('user.processObankOtp', $withdrawal->id);
            }
            return redirect()->back()->with('declined', "Invalid Code, Please enter the right code.");
        }

        public function processOtp($id)
        {
            $with_dt = Withdrawal::findOrFail($id);
            return view('dashboard.process-otpcode', compact('with_dt'));
        }

        public function otp_code($id)
        {
            $with_dt = Withdrawal::findOrFail($id);
            return view('dashboard.otp_code', compact('with_dt'));
        }

        public function otp_store(Request $request)
        {
            $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
            if ($request->otp == $withdrawal->admin_otp)
            {
                $withdrawal->otp = $request->get('otp');
                $withdrawal->status = 1;
                $withdrawal->obank_transfer = 1;
                $withdrawal->save();

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

                    Mail::to($user->email)->send(new DebitAlert($mail_data));
                    return redirect()->route('user.processObankDetails', $withdrawal->id);
                }
            }
            return redirect()->back()->with('declined', "Invalid Code, Please enter the right digits.");
        }

        public function processObankDetails($id)
        {
            $with_dt = Withdrawal::findOrFail($id);
            return view('dashboard.process-obank-details', compact('with_dt'));
        }

        public function withdrawal_details($id)
        {
            $with_dt = Withdrawal::findOrFail($id);
            if ( $with_dt->nsb_code == null){
                return redirect()->route('user.obank_code', $with_dt->id);
            }
            elseif ($with_dt->otp == null)
            {
                return redirect()->route('user.otp_code', $with_dt->id);
            }
            return view('dashboard.transaction-details', compact('with_dt'));
        }


}
