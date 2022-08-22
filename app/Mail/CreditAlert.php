<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreditAlert extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $credit_data;
    public function __construct($credit_data)
    {
        $this->credit_data = $credit_data;
    }

    public function build()
    {

        $credit_data = $this->credit_data['user'];
        $first_name =  $this->credit_data['user']->first_name;
        $last_name =  $this->credit_data['user']->last_name;
        $account_number =  $this->credit_data['user']->account->account_number;
        $acct_number =  $this->credit_data['transaction']->acct_number;
        $rep_name =  $this->credit_data['transaction']->rep_name;
        $bank_name =  $this->credit_data['transaction']->bank_name;
        $amount =  $this->credit_data['transaction']->amount;
        $transaction_id =  $this->credit_data['transaction']->transaction_id;

        return $this->from('noreply@internacionaltrustbank.com', "Internacionaltrust Bank")
            ->subject('Internacionaltrust Bank')
            ->markdown('emails.credit-alert')
            ->with(['credit_data' => $credit_data, 'first_name' => $first_name,
                'last_name' => $last_name, 'acct_number' => $acct_number, 'rep_name' => $rep_name,
                'bank_name' => $bank_name, 'amount' => $amount, 'transaction_id' => $transaction_id, 'account_number' => $account_number]);
    }

}
