<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Reply;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
}
