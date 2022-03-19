<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Question;
use App\Models\Review;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_user_can_access_reviews()
    {
        Review::factory()->create();

        $this->assertInstanceOf(Review::class, User::first()->reviews()->first() );
    }

    public function test_user_can_access_questions()
    {
        Question::factory()->create();

        $this->assertInstanceOf(Question::class, User::first()->questions()->first() );
    }

    public function test_user_can_access_orders()
    {
        Order::factory()->withUser( User::factory()->create() )->create();

        $this->assertInstanceOf(Order::class, User::first()->orders()->first() );
    }

    public function test_user_can_access_votes()
    {
        $vote = Vote::factory()->withObject( Review::factory()->create() )->create();

        $user = User::find($vote->user_id);

        $this->assertInstanceOf(Vote::class, $user->votes()->first() );
    }
}
