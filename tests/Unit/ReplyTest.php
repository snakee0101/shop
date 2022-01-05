<?php

namespace Tests\Unit;

use App\Models\Reply;
use App\Models\Review;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    public function test_review_has_many_replies()
    {
        $review = Review::factory()->create();
        $replies = Reply::factory()->withObject($review)->count(2)->create();

        $this->assertInstanceOf(Reply::class, $review->fresh()->replies[0]);
        $this->assertCount(2, $review->fresh()->replies);
    }

    public function test_reply_has_an_author()
    {

    }
}
