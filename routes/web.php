<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'pages.index')->name('homepage');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/debit-card', 'pages.debit-card')->name('debit_card');
Route::view('/e-statements', 'pages.e-statements')->name('e_statements');
Route::view('online-banking', 'pages.online-banking')->name('online_banking');
Route::view('mobile-banking', 'pages.mobile-banking')->name('mobile_banking');
Route::view('mobile-wallet', 'pages.mobile-wallet')->name('mobile_wallet');
Route::view('ATM', 'pages.atm')->name('atm');
Route::view('contact-us', 'pages.contact-us')->name('contact');
Route::view('cards', 'pages.cards')->name('cards');
Route::view('help', 'pages.help')->name('help');
Route::view('risk-disclosure', 'pages.risk-disclosure')->name('risk_disclosure');
Route::view('terms-and-conditions', 'pages.terms-and-conditions')->name('terms');
Route::view('privacy-policy', 'pages.privacy-policy')->name('privacy_policy');
Route::view('student-loan-refinance', 'pages.student-loan')->name('student_loan');
Route::view('internet-banking', 'pages.internet-banking')->name('internet_banking');
Route::view('branch-banking', 'pages.branch-banking')->name('branch_banking');
Route::view('FCTeNS', 'pages.FCTeNS')->name('FCTeNS');
Route::view('wealth-management', 'pages.wealth-management')->name('wealth_management');
Route::view('careers', 'pages.careers')->name('careers');

//Route::view('/','pages.index')->name('index');
Route::view('/contact-us','pages.contact-us')->name('contact');
Route::view('bank-accounts','pages.bank-accounts')->name('bank_accounts');
Route::view('register/new-account','pages.new-account')->name('reg_new_account');

Route::post('new-account', "ClientAccountCreation@new_account")->name('new_account');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'active'], 'prefix' => 'user', 'as' => 'user.'], function () {

    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('support', 'UserController@support')->name('support');
    Route::get('profile', "UserController@profile")->name('profile');
    Route::get('edit/profile/{id}', "UserController@editProfile")->name('editProfile');
    Route::get('password', "UserController@password")->name('password');
    Route::post('change-password', 'ChangePasswordController@storePassword')->name('storePassword');


    // Withdrawal Routes
    Route::get('statement', 'TransactionsController@transactions')->name('statement');
//    Route::get('process', 'TransactionsController@process')->name('process');

//    NSB Transfer
    Route::get('nsb/transfer', "NSBController@nsbTransfer")->name('acuTransfer');
    Route::post('store/nsb/transfer', "NSBController@storeNsbTransfer")->name('storeNsbTransfer');
    Route::get('process/nsb/{id}', "NSBController@processNsb")->name('processNsb');
    Route::get('nsb/code/{id}', "NSBController@nsb_code")->name('nsb_code');
    Route::post('store/nsb-code', "NSBController@nsb_store")->name('nsb_store');
    Route::get('process/{id}/nsb/final', 'NSBController@processFinal')->name('processFinal');
    Route::get('transaction/nsb-details/{id}', "NSBController@withdrawal_details")->name('nsb_withdrawal_details');

//    Other Bank Transfer
    Route::get('obank/transfer', "OtherBankController@obankTransfer")->name('otherBankTransfer');
    Route::post('store/obank/transfer', "OtherBankController@storeObankTransfer")->name('storeObankTransfer');
    Route::get('process/obank/{id}', "OtherBankController@processObank")->name('processObank');
    Route::get('obank/code/{id}', "OtherBankController@obank_code")->name('obank_code');
    Route::post('store/obank', "OtherBankController@obank_store")->name('obank_store');
    Route::get('process/obank/otp/{id}', "OtherBankController@processOtp")->name('processObankOtp');
    Route::get('obank/otp/code/{id}', "OtherBankController@otp_code")->name('otp_code');
    Route::post('store/obank/otp', "OtherBankController@otp_store")->name('otp_store');
    Route::get('process/obank-details/{id}', 'OtherBankController@processObankDetails')->name('processObankDetails');
    Route::get('transaction/obank-details/{id}', "OtherBankController@withdrawal_details")->name('obank_withdrawal_details');

//    Wire Transfer
    Route::get('wire-transfer', "WireTransferController@wireTransfer")->name('wire_transfer');
    Route::post('wire-transfer', "WireTransferController@storeWireTransfer")->name('storeWireTransfer');
    Route::get('process/wire-transfer/{id}', "WireTransferController@processWireTransfer")->name('processWireTransfer');
    Route::get('wire-transfer/nsb/{id}', "WireTransferController@WireNsbCode")->name('WireNsbCode');
    Route::post('wire-transfer/nsb', "WireTransferController@wireNsbStore")->name('wireNsbStore');
    Route::get('process/wire-transfer/nsb/{id}', "WireTransferController@processWireNsb")->name('processWireNsb');
    Route::get('wire-transfer/otp/{id}', "WireTransferController@wireOptCode")->name('wireOptCode');
    Route::post('wire-transfer/otp/', "WireTransferController@wireOtpStore")->name('wireOtpStore');
    Route::get('process/wire-transfer/otp/{id}', "WireTransferController@processWireOtp")->name('processWireOtp');
    Route::get('wire-transfer/atc/{id}', "WireTransferController@wireAtcCode")->name('wireAtcCode');
    Route::post('wire-transfer/atc/', "WireTransferController@wireAtcStore")->name('wireAtcStore');
    Route::get('process/wire-transfer/atc/{id}', "WireTransferController@processWireAtc")->name('processWireAtc');
    Route::get('wire-transfer/details/{id}', "WireTransferController@withdrawal_details")->name('wire_withdrawal_details');

    Route::get('transfer/history', "WithdrawalController@withdrawHistory")->name('withdrawHistory');

    // Deposits Payment Route
    Route::get('/deposit/methods', "PaymentMethodController@payment_method")->name('payment_method');
    Route::get('/deposit/method/details/{id}', "PaymentMethodController@PaymentMethodDetails")->name('PaymentMethodDetails');
    Route::post('store/deposit', "PaymentMethodController@storeDeposit")->name('storeDeposit');
    Route::get('deposit/payment/{id}', "PaymentMethodController@payment")->name('payment');
    Route::get('bitcoin/deposit', "PaymentMethodController@bitcoin")->name('bitcoin');

    //Deposits Route
    Route::get('deposits', "DepositController@deposits")->name('deposits');

//    Loan Route
    Route::resource('loan', "LoanController");

    // Card Route
    Route::resource('card', "RequestCardController");


});
Route::get('get-started', "UserController@pending")->name('pending');

include'admin.php';

Route::get('testsms', "Admin\AdminController@sendSMS");
