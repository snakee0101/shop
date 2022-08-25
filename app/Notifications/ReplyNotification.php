<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReplyNotification extends Notification
{
    private $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $object_type = class_basename($this->object);

        $url = match($object_type) {
            'Question' => route('question.show', $this->object),
            'Review' => route('review.show', $this->object)
        };

        return (new MailMessage)
                    ->line('You have a new reply on your ' . $object_type)
                    ->action('See the reply', $url)
                    ->line('Thank you for using our application!');
    }
}
