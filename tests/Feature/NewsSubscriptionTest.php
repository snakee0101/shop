<?php

namespace Tests\Feature;

use App\Mail\ConfirmNewsSubscriptionMail;
use App\Mail\NewsletterMail;
use App\Models\News;
use App\Models\NewsSubscriber;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class NewsSubscriptionTest extends TestCase
{

    public function test_confirmation_email_must_be_sent_before_subscription()
    {
        Mail::fake();

        $this->post( route('news.subscribe'), [
            'email' => 'new@email.com'
        ])->assertRedirect();

        Mail::assertSent(ConfirmNewsSubscriptionMail::class);
    }

    public function test_user_could_be_subscribed_if_it_confirms_email()
    {
        Mail::fake();

        $this->post( route('news.subscribe'), [
            'email' => 'new@email.com'
        ])->assertRedirect();

        $url = '';

        Mail::assertSent(function (ConfirmNewsSubscriptionMail $mail) use (&$url) {
            $url = $mail->url;
            return true;
        });

        $this->get($url);

        $this->assertDatabaseHas('news_subscribers', [
            'email' => 'new@email.com'
        ]);
    }

    public function test_if_subscriber_email_is_empty_validation_fails()
    {
        $this->post( route('news.subscribe'), [
            'email' => ''
        ] )->assertSessionHasErrors('email');
    }

    public function test_if_subscriber_email_is_exists_validation_fails()
    {
        NewsSubscriber::factory()->create(['email' => 'new@email.com']);

        $this->post( route('news.subscribe'), [
            'email' => 'new@email.com'
        ] )->assertSessionHasErrors('email');
    }

    public function test_when_news_is_created_subscribers_are_notified()
    {
        $subscriber = NewsSubscriber::factory()->create();

        Storage::fake();
        Mail::fake();

        $tags = Tag::factory()->count(3)->create();

        $data = News::factory()->raw();

        $image = UploadedFile::fake()->image('main_image');
        $data['main_image'] = $image;

        $this->post( route('news.store'),  $data);

        Mail::assertQueued(NewsletterMail::class, function(NewsletterMail $mail) use ($subscriber) {
           return $mail->to[0]['address'] === $subscriber->email;
        });
    }
}
