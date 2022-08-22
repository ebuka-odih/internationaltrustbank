<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminSettings extends Controller
{
    //

    public function settings()
    {
        return view('admin.settings');
    }
    public function admin_info_store(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        $request->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->back()->with('success', "info updated successfully");
    }


    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
            'pass' => 'nullable',
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password), 'pass' => $request->password]);

        return redirect()->back()->with('change_password', "Password Changed Successfully!");
    }


}
