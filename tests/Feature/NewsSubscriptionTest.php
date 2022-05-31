<?php

namespace Tests\Feature;

use App\Mail\ConfirmNewsSubscriptionMail;
use App\Models\NewsSubscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;
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

    /*public function test_user_could_be_subscribed()
    {
        $this->post( route('news.subscribe'), [
            'email' => 'new@email.com'
        ])->assertRedirect();

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
    }*/
}
