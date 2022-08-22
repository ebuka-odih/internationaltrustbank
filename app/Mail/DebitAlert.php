<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DebitAlert extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail_data;
    public function __construct($mail_data)
    {
        //
        $this->mail_data = $mail_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail_data = $this->mail_data['user'];
        $first_name =  $this->mail_data['user']->first_name;
        $last_name =  $this->mail_data['user']->last_name;
        $account_number =  $this->mail_data['user']->account->account_number;
        $acct_number =  $this->mail_data['transaction']->acct_number;
        $rep_name =  $this->mail_data['transaction']->rep_name;
        $bank_name =  $this->mail_data['transaction']->bank_name;
        $amount =  $this->mail_data['transaction']->amount;
        $transaction_id =  $this->mail_data['transaction']->transaction_id;

        return $this->from('noreply@internacionaltrustbank.com', "Internacionaltrust Bank")->subject('Internacionaltrust Bank')->markdown('emails.debit-alert')->
        with(['mail_data' => $mail_data, 'first_name' => $first_name,
            'last_name' => $last_name, 'acct_number' => $acct_number, 'rep_name' => $rep_name,
            'bank_name' => $bank_name, 'amount' => $amount, 'transaction_id' => $transaction_id, 'account_number' => $account_number]);
    }


}
