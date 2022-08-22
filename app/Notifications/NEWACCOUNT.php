<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NEWACCOUNT extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)->subject('Internacionaltrust Bank')->from('noreply@internacionaltrustbank.com')
                    ->line("Dear ".$this->data['user']->title." ".$this->data['user']->last_name.' Your account with Internacionaltrust bank account Bank has been established.')
                    ->line("Account Number: " . $this->data['account']->account_number)
                    ->line("Account Type: " . $this->data['user']->account_type)
                    ->line("Email: " . $this->data['user']->email)
                    ->line("Access Password: " . $this->data['user']->pass)
                    ->line("You can use your email and password to login for more information")
                    ->line("Note: This is a one time password, Please remember to change your password once you login to your account")
                    ->line("Please do not share this information with anyone")
//                    ->action('Notification Action', url('/'))
                    ->line('Thank you for banking with us!');
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
