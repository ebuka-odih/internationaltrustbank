<?php

namespace App\Http\Controllers;

use App\Mail\DebitAlert;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WireTransferController extends Controller
{
    public function wireTransfer()
    {
        return view('dashboard.wire-transfer.wire-transfer');
    }

    public function storeWireTransfer(Request $request)
    {
        $data = $this->getData($request);
        if($request->trans_type == "wire_transfer"){
            if ($data['amount'] > Auth::user()->account->balance){
                return redirect()->back()->with('declined', 'Insufficient Balance');
            }
            $data['user_id'] = Auth::id();
            $data['from'] = Auth::user()->account->account_number;
            $data['wire_transfer'] = 1;
            $data = Withdrawal::create($data);
        }
        return redirect()->route('user.processWireTransfer', $data->id)->with('success', "Transfer Successful");
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
//            'ben_name' => 'required',
            'ben_city' => 'required',
            'ben_country' => 'required',
            'ben_address' => 'required',
            'country' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function processWireTransfer($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.wire-transfer.process-wire-transfer', compact('with_dt'));
    }

    public function WireNsbCode($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.wire-transfer.wire-nsb-code', compact('with_dt'));
    }

    public function wireNsbStore(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
        if ($request->nsb_code == $withdrawal->admin_nsb_code)
        {
            $withdrawal->nsb_code = $request->get('nsb_code');
            $withdrawal->save();
            return redirect()->route('user.processWireNsb', $withdrawal->id);
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right code.");
    }

    public function processWireNsb($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.wire-transfer.process-wire-nsb', compact('with_dt'));
    }

    public function wireOptCode($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.wire-transfer.wire-otp-code', compact('with_dt'));
    }

    public function wireOtpStore(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
        if ($request->otp == $withdrawal->admin_otp)
        {
            $withdrawal->otp = $request->get('otp');
            $withdrawal->save();
            return redirect()->route('user.processWireOtp', $withdrawal->id);
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right code.");
    }

    public function processWireOtp($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.wire-transfer.process-wire-otp', compact('with_dt'));
    }

    public function wireAtcCode($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.wire-transfer.wire-atc-code', compact('with_dt'));
    }

    public function wireAtcStore(Request $request)
    {
        $withdrawal = Withdrawal::findOrFail($request->withdrawal_id);
        if ($request->atc_code == $withdrawal->admin_atc_code)
        {
            $withdrawal->atc_code = $request->get('atc_code');
            $withdrawal->status = 1;
            $withdrawal->wire_transfer = 1;
            $withdrawal->save();
            if ($withdrawal->status == 1){
                $new_balance = Auth::user()->account->balance -= $withdrawal->amount;
                Auth::user()->account->update(['balance' => $new_balance]);

                $vat = $withdrawal->amount * 0.5 / 100;

                $withdrawal->update(['vat' => $vat, 'debit' => 1]);
                $withdrawal->save();
                auth()->user()->account->balance -= $vat;
                auth()->user()->save();

                $user = Auth::user();
                $mail_data = ['user' => $user, 'transaction' => $withdrawal];

                Mail::to($user->email)->send(new DebitAlert($mail_data));
                return redirect()->route('user.processWireAtc', $withdrawal->id);
            }
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right code.");
    }

    public function processWireAtc($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        return view('dashboard.wire-transfer.process-wire-atc', compact('with_dt'));
    }

    public function withdrawal_details($id)
    {
        $with_dt = Withdrawal::findOrFail($id);
        if ( $with_dt->nsb_code == null){
            return redirect()->route('user.WireNsbCode', $with_dt->id);
        }
        elseif ($with_dt->otp == null)
        {
            return redirect()->route('user.wireOptCode', $with_dt->id);
        }
        elseif ($with_dt->atc_code == null)
        {
            return redirect()->route('user.wireAtcCode', $with_dt->id);
        }
        return view('dashboard.transaction-details', compact('with_dt'));
    }



}
