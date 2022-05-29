<?php

namespace Tests\Feature;

use App\Models\NewsSubscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsSubscriptionTest extends TestCase
{
    public function test_user_could_be_subscribed()
    {
        $this->post( route('news.subscribe'), [
            'email' => 'new@email.com'
        ])->assertRedirect();

        $this->assertDatabaseHas('news_subscribers', [
            'email' => 'new@email.com'
        ]);
    }

    public function test_if_subscriber_email_is_exists_exception_is_raised()
    {
        $this->withoutExceptionHandling()
             ->expectExceptionMessage('UNIQUE');

        NewsSubscriber::factory()->create(['email' => 'new@email.com']);

        $this->post( route('news.subscribe'), [
            'email' => 'new@email.com'
        ] )->assertRedirect();
    }
}
