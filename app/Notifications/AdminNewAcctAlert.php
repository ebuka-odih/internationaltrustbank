<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminNewAcctAlert extends Notification
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

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->subject('Internacionaltrust Bank')->from('noreply@internacionaltrustbank.com')
            ->line("Admin, A new account has been created, check below for info ")
            ->line($this->data['user']->title." ".$this->data['user']->last_name)
            ->line("Account Number: " . $this->data['account']->account_number)
            ->line("Account Type: " . $this->data['user']->account_type)
            ->line("Email: " . $this->data['user']->email)
            ->line("Access Password: " . $this->data['user']->pass)
            ->line("Login to check more info");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
