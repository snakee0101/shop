<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Reply;
use App\Models\Review;
use App\Notifications\ReplyNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    public function test_user_can_leave_a_reply_on_review()
    {
        $review = Review::factory()->create([
            'product_id' => Product::factory()
        ]);

        $reply = Reply::factory()->make([
            'object_type' => $review::class,
            'object_id' => $review->id,
        ]);

        $this->actingAs( $review->author );
        $this->post( route('reply.store'), $reply->toArray() );

        $this->assertInstanceOf(Reply::class, Reply::first());
    }

    public function test_when_user_replies_object_owner_is_notified_by_email()
    {
        Notification::fake();

        $review = Review::factory()->create([
            'product_id' => Product::factory()
        ]);

        $reply = Reply::factory()->make([
            'object_type' => $review::class,
            'object_id' => $review->id,
        ]);

        $this->actingAs( $review->author );
        $this->post( route('reply.store'), $reply->toArray() );

        Notification::assertSentTo($review->author, ReplyNotification::class);
    }
}
