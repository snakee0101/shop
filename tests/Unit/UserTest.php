<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_user_can_access_reviews()
    {
        Review::factory()->create();

        $this->assertInstanceOf(Review::class, User::first()->reviews()->first() );
    }

    public function test_user_can_access_orders()
    {
        Order::factory()->withUser( User::factory()->create() )->create();

        $this->assertInstanceOf(Order::class, User::first()->orders()->first() );
    }
}
