<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class NewDepositRequest extends Notification
{
    use Queueable;

    public $deposit;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($deposit)
    {
        $this->deposit = $deposit;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $user = strtok(Auth::user()->name, ' ');
        return (new MailMessage)
                    ->greeting("Dear $user")
                    ->line("You have made a deposit request of {$this->deposit->amount}.")
                    ->line("to be paid to this wallet address {$this->deposit->coin->wallet_id}.")
                    ->line('Thank you for using bitfrontstake!');
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
            'message'   =>  "New deposit request from ".Auth::user()->name
        ];
    }
}
