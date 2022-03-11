<?php

namespace Tests\Unit;

use App\Models\Question;
use App\Models\Reply;
use App\Models\Review;
use App\Models\User;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    public function test_review_has_many_replies()
    {
        $review = Review::factory()->create();
        $replies = Reply::factory()->withObject($review)->count(2)->create();

        $this->assertInstanceOf(Reply::class, $review->fresh()->replies[0]);
        $this->assertCount(2, $review->fresh()->replies);


    }public function test_question_has_many_replies()
    {
        $question = Question::factory()->create();
        $replies = Reply::factory()->withObject($question)->count(2)->create();

        $this->assertInstanceOf(Reply::class, $question->fresh()->replies[0]);
        $this->assertCount(2, $question->fresh()->replies);
    }

    public function test_reply_has_an_author()
    {
        $review = Review::factory()->create();
        $reply = Reply::factory()->withObject($review)->create();

        $this->assertInstanceOf(User::class, $reply->author);
    }

    public function test_replied_object_is_available()
    {
        $review = Review::factory()->create();
        $reply = Reply::factory()->withObject($review)->create();

        $this->assertInstanceOf(Review::class, $reply->object);
    }
}
