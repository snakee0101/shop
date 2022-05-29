<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsSubscriptionTest extends TestCase
{
    public function test_user_could_be_subscribed()
    {
        $this->post( route('news.subscribe', 'new@email.com') )
             ->assertStatus(200);

        $this->assertDatabaseHas('news_subscribers', [
            'email' => 'new@email.com'
        ]);
    }
}
