<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
   public function all_accounts()
   {
       $accounts = Account::all();
       $users = User::all();
       return view('admin.add-account', compact('accounts', compact('users')));
   }

   public function create_account()
   {
       $users = User::all();
       return view('admin.fund-account', compact('users'));
   }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        Account::create($data);
        return redirect()->route('admin.users');

    }

    public function update_bank(Request $request, $id)
    {
//        $user = User::findOrFail($id);
        $account = Account::whereUserId($id)->first();
        $account->account_limit_per_day = $request->account_limit_per_day;
        $account->active = $request->active;
//        $account->update(['account_limit_per_day' => $request->account_limit_per_day, 'active' => $request->active] );
        $account->save();
        return redirect()->back();

    }

   protected function getData(Request $request){
       $rules = [
           'account_number' => 'nullable',
           'account_type' => 'nullable',
           'balance' => 'nullable',
           'account_limit_per_day' => 'nullable',
           'active' => 'nullable'
       ];
       return $request->validate($rules);
   }


}
