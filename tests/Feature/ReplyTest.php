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
    private function create_review_with_reply($notify_on_reply = false)
    {
        Notification::fake();

        $review = Review::factory()->create([
            'product_id' => Product::factory(),
            'notify_on_reply' => $notify_on_reply
        ]);

        $reply = Reply::factory()->make([
            'object_type' => $review::class,
            'object_id' => $review->id,
        ]);

        return [$review, $reply];
    }

    public function test_user_can_leave_a_reply_on_review()
    {
        [$review, $reply] = $this->create_review_with_reply();

        $this->actingAs( $review->author );
        $this->post( route('reply.store'), $reply->toArray() );

        $this->assertNotNull( Reply::first() );
    }

    public function test_user_that_is_not_logged_in_redirected_to_the_log_in_page()
    {
        [, $reply] = $this->create_review_with_reply();

        $this->post( route('reply.store'), $reply->toArray() )
             ->assertRedirect( route('account') );
    }

    public function test_when_user_replies_object_owner_is_notified_by_email()
    {
        [$review, $reply] = $this->create_review_with_reply(true);

        $this->actingAs( $review->author );
        $this->post( route('reply.store'), $reply->toArray() );

        Notification::assertSentTo($review->author, ReplyNotification::class);
    }

    public function test_reply_notification_is_not_sent_to_user_that_didnt_agree_to_receive_them()
    {
        [$review, $reply] = $this->create_review_with_reply();

        $this->actingAs( $review->author );
        $this->post( route('reply.store'), $reply->toArray() );

        Notification::assertNotSentTo($review->author, ReplyNotification::class);
    }
}
