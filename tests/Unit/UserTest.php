<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Photo;
use App\Models\Question;
use App\Models\Reply;
use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use App\Models\Video;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_user_has_reviews()
    {
        Review::factory()->create();

        $this->assertInstanceOf(Review::class, User::first()->reviews[0] );
    }

    public function test_user_has_questions()
    {
        Question::factory()->create();

        $this->assertInstanceOf(Question::class, User::first()->questions[0] );
    }

    public function test_user_has_orders()
    {
        Order::factory()->withUser( User::factory()->create() )
                        ->create();

        $this->assertInstanceOf(Order::class, User::first()->orders[0] );
    }

    public function test_user_has_reports()
    {
        $report = Report::factory()->withObject( Review::factory()->create() )
                                   ->create();

        $user = User::find($report->user_id);

        $this->assertInstanceOf(Report::class, $user->reports[0] );
    }

    public function test_user_has_votes()
    {
        $vote = Vote::factory()->withObject( Review::factory()->create() )
                               ->create();

        $user = User::find($vote->user_id);

        $this->assertInstanceOf(Vote::class, $user->votes[0] );
    }

    public function test_user_has_videos()
    {
        $user = User::factory()->create();

        $question = Question::factory()->create( ['user_id' => $user->id] );
        $review = Review::factory()->create( ['user_id' => $user->id] );

        Video::factory()->withObject($question)->create( ['user_id' => $user->id] );
        Video::factory()->withObject($review)->create( ['user_id' => $user->id] );

        Video::factory()->withObject($review)->create( ); //not by this user

        $this->assertCount(2, $user->videos);
        $this->assertInstanceOf(Video::class, $user->videos[0]);
        $this->assertInstanceOf(Video::class, $user->videos[1]);
    }

    public function test_user_has_photos()
    {
        $user = User::factory()->create();

        $question = Question::factory()->create( ['user_id' => $user->id] );
        $review = Review::factory()->create( ['user_id' => $user->id] );

        Photo::factory()->withObject($question)->create( ['user_id' => $user->id] );
        Photo::factory()->withObject($review)->create( ['user_id' => $user->id] );

        Photo::factory()->withObject($review)->create( ); //not by this user

        $this->assertCount(2, $user->photos);
        $this->assertInstanceOf(Photo::class, $user->photos[0]);
        $this->assertInstanceOf(Photo::class, $user->photos[1]);
    }

    public function test_user_has_replies()
    {
        $user = User::factory()->create();

        $question = Question::factory()->create( );
        $review = Review::factory()->create( );

        Reply::factory()->withObject($question)->create( ['user_id' => $user->id] );
        Reply::factory()->withObject($review)->create( ['user_id' => $user->id] );

        $this->assertCount(2, $user->replies);
        $this->assertInstanceOf(Reply::class, $user->replies[0]);
        $this->assertInstanceOf(Reply::class, $user->replies[1]);
    }
}
