<?php

namespace App\Notifications;

use App\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CompanyCreated extends Notification
{
    use Queueable;

    public $companies;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Company $company)
    {
        $this->companies= $company;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database','nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'company_id' => $this->companies->id,
            'company_name' => $this->companies->name,
        ];
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
            ->content('umer test massage');
    }



}
