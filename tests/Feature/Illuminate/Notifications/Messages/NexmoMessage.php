<?php


namespace Illuminate\Notifications\Messages;


class NexmoMessage extends Notifications
{
    public static function message()
    {
    }

    public function via($notifiable){
    return ['database'];

}

    /**
     * Get the Vonage / SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\NexmoMessage
     */
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
            ->content('Your SMS message content');
    }











}
