<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('add/admin', "Admin\AdminController@create")->name('add_admin');
    Route::post('add/admin', "Admin\AdminController@store_admin")->name('store_admin');
    Route::get('edit/admin/{id}', "Admin\AdminController@edit_admin")->name('edit_admin');
    Route::patch('edit/admin/{id}', "Admin\AdminController@update_admin")->name('update_admin');

    // User Route
    Route::get('users', 'Admin\UserController@all_users')->name('users');
    Route::get('active/users', 'Admin\UserController@active_users')->name('active_users');
    Route::get('inactive/users', 'Admin\UserController@inactive_users')->name('inactive_users');
    Route::get('admins', 'Admin\UserController@admins')->name('admins');
    Route::get('user-details/{id}', 'Admin\UserController@user_details')->name('user_details');
    Route::get('edit/user/{id}', 'Admin\UserController@edit_details')->name('edit_details');
    Route::patch('update/user/{id}', 'Admin\UserController@update_user')->name('update_user');
    Route::get('add-user', 'Admin\UserController@create')->name('add_user');
    Route::post('store/user', 'Admin\UserController@store_user')->name('store_user');
    Route::delete('user/{id}/delete', 'Admin\UserController@delete_user')->name('delete.user');
    Route::get('approve/user/{id}', "Admin\UserController@approveUser")->name('approveUser');
    //  End of User Route

    //  Transfer Route
    Route::get('nsb-transfer', 'Admin\AdminTransactions@nsbTransfer')->name('nsbTransfer');
    Route::get('nsb-transfer/details/{id}', 'Admin\AdminTransactions@nsbTransferDetails')->name('nsbTransferDetails');
    Route::post('send/nsb-code/{id}', 'Admin\AdminTransactions@admin_nsb')->name('admin_nsb');
    Route::post('send/otp-code/{id}', 'Admin\AdminTransactions@admin_otp')->name('admin_otp');
    Route::post('send/atc-code/{id}', 'Admin\AdminTransactions@admin_atc')->name('admin_atc');
    Route::get('obank-transfer', 'Admin\AdminTransactions@obankTransfer')->name('obankTransfer');
    Route::get('obank-transfer/details/{id}', 'Admin\AdminTransactions@obankTransferDetails')->name('obankTransferDetails');
    Route::get('wire-transfer', 'Admin\AdminTransactions@wireTransfer')->name('wireTransfer');
    Route::get('wire-transfer/details/{id}', 'Admin\AdminTransactions@wireTransferDetails')->name('wireTransferDetails');

    //  Deposits Route
    Route::get('add/deposit', "Admin\AdminDeposits@add_deposit")->name('add_deposit');
    Route::get('deposit', "Admin\AdminDeposits@deposits")->name('deposits');
    Route::post('store/deposit', "Admin\AdminDeposits@storeDeposit")->name('storeDeposit');
    Route::delete('delete/deposit/{id}', "Admin\AdminDeposits@deleteDeposit")->name('deleteDeposit');

    // Loan Routes
    Route::get('active/loans', "Admin\AdminLoans@activeLoans")->name('activeLoans');
    Route::get('pending/loans', "Admin\AdminLoans@pendingLoan")->name('pendingLoan');
    Route::get('approve/loan/{id}', "Admin\AdminLoans@approveLoan")->name('approveLoan');
    Route::get('eligable/user/loans', "Admin\AdminLoans@eligable")->name('eligable');
    Route::get('activate/user/loans/{id}', "Admin\AdminLoans@activateEligable")->name('activateEligable');
    Route::get('decline/user/loans', "Admin\AdminLoans@decline")->name('decline');
    Route::delete('delete/loans', "Admin\AdminLoans@deleteLoan")->name('deleteLoan');

    // Payment Method Routes
    Route::get('payment/methods', "Admin\AdminPaymentMethod@payment_method")->name('payment_method');
    Route::get('add/payment/methods', "Admin\AdminPaymentMethod@addMethod")->name('addMethod');
    Route::post('add/bank/methods', "Admin\AdminPaymentMethod@storeBankMethod")->name('storeBankMethod');
    Route::get('add/bitcoin/methods', "Admin\AdminPaymentMethod@bitcoinMethod")->name('bitcoinMethod');
    Route::post('store/bitcoin/methods', "Admin\AdminPaymentMethod@storeBtcMethod")->name('storeBtcMethod');
    Route::get('add/instant/transfer', "Admin\AdminPaymentMethod@instantTransfer")->name('instantTransfer');
    Route::post('store/instant/transfer', "Admin\AdminPaymentMethod@storeInstantTransfer")->name('storeInstantTransfer');
    Route::delete('delete/payment/method/{id}', "Admin\AdminPaymentMethod@deleteMethod")->name('deleteMethod');

//    Message route
    Route::get('user/profile/message/{id}', 'Admin\MessageController@index')->name('user_message')->where('id', '[0-9]+');
    Route::get('user/message/create/{id}', 'Admin\MessageController@create')->name('create');
    Route::post('user/message/store', 'Admin\MessageController@store')->name('mesg_store');
    Route::get('user/message/details/{id}', 'Admin\MessageController@show')->name('msg_show');

    Route::get('user/verify{id}', 'Admin\AdminController@approve_user')->name('verify_user');

    Route::get('withdrawal/{id}', 'Admin\AdminWithdrawal@withdrawal_details')->name('withdrawal_details');

    Route::get('settings', "Admin\AdminSettings@settings")->name('settings');
    Route::post('update/admin-profile', "Admin\AdminSettings@admin_info_store")->name('admin_info_store');

    Route::post('update/admin-password', "Admin\AdminSettings@change_password")->name('change_password');

//    Cards Route
    Route::get('cards', "Admin\AdminCardController@cards")->name('cards');
    Route::get('approve/card/{id}', "Admin\AdminCardController@approveCard")->name('approveCard');
    Route::delete('delete/card/{id}', "Admin\AdminCardController@deleteCard")->name('deleteCard');

    //  Password Route
    Route::get('security', "Admin\AdminController@password")->name('password');
    Route::post('password/store', "Admin\AdminController@storePassword")->name('storePassword');

});


