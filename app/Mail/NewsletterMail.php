<?php

namespace App\Mail;

use App\Models\News;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class NewsletterMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $news_article_url, $unsubscribe_url;

    public function __construct(public News $news_article,
                                public string $recipients_email)
    {
        $this->news_article_url = route('news.show', $this->news_article);
        $this->unsubscribe_url = URL::temporarySignedRoute('news.unsubscribe', now()->addHour(), $recipients_email);
    }

    public function build()
    {
        return $this->markdown('mail.newsletter_mail');
    }
}
