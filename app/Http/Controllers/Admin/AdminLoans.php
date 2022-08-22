<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Loan;
use App\Notifications\AcceptLoan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminLoans extends Controller
{
    public function activeLoans()
    {
        $loans = Loan::all();
        return view('admin.loan.active-loans', compact('loans'));
    }

    public function pendingLoan()
    {
        $loans = Loan::where('status', 0)->get();
        return view('admin.loan.pending-loans', compact('loans'));
    }
    public function approveLoan($id)
    {
        $loan = Loan::findOrFail($id);
        $user = User::findOrFail($loan->user_id);
        $user->account->balance += $loan->amount;
        $user->account->save();
        $loan->status = 1;
        $loan->save();
        Notification::send($user, new AcceptLoan($loan));
        return redirect()->back()->with('success', "User is now eligable");
    }

    public function eligable()
    {
        $users = User::where('admin', 0)->get();
        $eligible_users = User::where('admin', 0)->where('eligable', 1)->get();
        return view('admin.loan.eligable', compact('users', 'eligible_users'));
    }

    public function activateEligable($id)
    {
        $loan = User::findOrFail($id);
        $loan->eligable = 1;
        $loan->save();
        return redirect()->back()->with('success', "User is now eligable");
    }

    public function decline($id)
    {
        $loan = Loan::findOrFail($id);
        $loan->status = -1;
        $loan->save();
        return redirect()->back()->with('decline', "Loan Declined");
    }

    public function deleteLoan($id)
    {
        $loan = Loan::findOrFail($id);
        $loan->delete();
        return redirect()->back();
    }
}
