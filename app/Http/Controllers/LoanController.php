<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Notifications\LoanAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class LoanController extends Controller
{

    public function index()
    {
        $loans = Loan::whereUserId(auth()->id())->paginate(5);
        return view('dashboard.loan.loans', compact('loans'));
    }

    public function create()
    {
        return view('dashboard.loan.create');
    }

    public function store(Request $request)
    {
        if (auth()->user()->eligable != 0){
            $data = $this->getData($request);
            $data['user_id'] = Auth::id();
            $data = Loan::create($data);
            Notification::send("admin@nsbplc.com", new LoanAlert($data));
            return redirect()->back()->with('success', "Loan Requested Successfully, We Will Get Back To You");
        }
        return redirect()->back()->with('declined', "You are not eligible to request for a loan");

    }

    protected function getData(Request $request)
    {
        $rules = [
            'amount' => 'required',
            'loan_type' => 'required',
            'currency' => 'required',
            'desc' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
