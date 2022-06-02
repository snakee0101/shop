<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class ConfirmNewsSubscriptionMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $url;

    public function __construct($email)
    {
        $this->url = Url::signedRoute('news.confirm_subscription', ['email' => $email]) . "#newsletter_footer";
    }

    public function build()
    {
        return $this->from('news@example.com')
                    ->markdown('mail.confirm_news_subscription_mail');
    }
}
