<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InspectionUserNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($inspection, $status)
    {
        $this->inspection = $inspection;
        $this->status = $status;
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
        // $inspection->belongtosystem->system.' PPM Inspection PPMIC/'.$inspection->belongtosystem->system.'-'.sprintf("%06d", $inspection->id).' Need To Be Review')
        return (new MailMessage)
                    ->from('noreply@prpctelecommania.com', 'Please Do Not Reply')
                    ->subject($this->inspection->belongtosystem->system.' PPM Inspection PPMIC/'.$this->inspection->belongtosystem->system.'-'.sprintf("%06d", $this->inspection->id).' Need To Be '.$this->status)
                    ->greeting('Hi '.$notifiable->name.'.')
                    ->line('Please have a look at the PPM Inspection Report done by '.$this->inspection->belongtostaff->name.'.')
                    ->action('PPM Inspection Checklist Report : PPMIC/'.$this->inspection->belongtosystem->system.'-'.sprintf("%06d", $this->inspection->id), url('/inspection/'.$this->inspection->id.'/show'))
                    ->line('Thank you.');
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
