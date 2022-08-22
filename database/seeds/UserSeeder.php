<?php

use App\Account;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function autoCreate($user_id){
        $accounts = Account::orderBy('created_at', 'desc')->first();
        if($accounts){
            $last_account_num = $accounts->account_number ;
        }else {
            $last_account_num = '10091178600';
        }

        $account_num = (int)$last_account_num + 1;

        $save = Account::create(['user_id' => $user_id, 'account_number' => $account_num]);

        $user = User::findOrFail($user_id);

//        $user->notify(new NewAccount($save));

    }

    public function run()
    {
        $user2 = User::where('email', '=', 'user@nsbplc.com')->first();
        if($user2 === null){
            $user3 = User::create([
                'first_name' => 'NSB PLC',
                'last_name' => 'User',
                'email' => 'user@nsbplc.com',
                'status' => 1,
                'admin' => 0,
                'account_type' => "Savings",
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('USERNSBPLSV3455'),
            ]);
            $this->autoCreate($user3->id);
        }

    }


}



