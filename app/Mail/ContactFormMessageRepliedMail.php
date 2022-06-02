<?php

namespace App\Mail;

use App\Models\ContactFormMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMessageRepliedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public ContactFormMessage $contact_form_message;
    public $text;

    public function __construct(ContactFormMessage $contact_form_message, $text)
    {
        $this->contact_form_message = $contact_form_message;
        $this->text = $text;
    }

    public function build()
    {
        return $this->from('news@example.com')
                    ->markdown('mail.contact_form_message_replied_mail');
    }
}
