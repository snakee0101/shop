<?php

namespace Tests\Unit;

use App\Models\Question;
use App\Models\Review;
use App\Models\User;
use App\Models\Vote;
use Tests\TestCase;

class VoteTest extends TestCase
{
    public function test_review_has_many_votes()
    {
        $review = Review::factory()->create();

        Vote::factory()->count(2)
                       ->withObject($review)
                       ->create();

        $this->assertInstanceOf(Vote::class, $review->fresh()->votes()->first());
        $this->assertCount(2, $review->fresh()->votes);
    }

    public function test_question_has_many_votes()
    {
        $question = Question::factory()->create();

        Vote::factory()->count(2)
                       ->withObject($question)
                       ->create();

        $this->assertInstanceOf(Vote::class, $question->fresh()->votes()->first());
        $this->assertCount(2, $question->fresh()->votes);
    }

    public function test_review_knows_its_votes_statistics()
    {
        $review = Review::factory()->create();

        Vote::factory()->count(3)
            ->withObject($review)
            ->create(['value' => +1]);

        Vote::factory()->count(2)
            ->withObject($review)
            ->create(['value' => -1]);

        $this->assertEquals([
            'for_count' => 3,
            'against_count' => 2
        ], $review->fresh()->vote_statistics);
    }

    function test_question_knows_its_votes_statistics()
    {
        $question = Question::factory()->create();

        Vote::factory()->count(3)
            ->withObject($question)
            ->create(['value' => +1]);

        Vote::factory()->count(2)
            ->withObject($question)
            ->create(['value' => -1]);

        $this->assertEquals([
            'for_count' => 3,
            'against_count' => 2
        ], $question->fresh()->vote_statistics);
    }

    public function test_review_knows_whether_is_it_voted()
    {
        $review = Review::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $review->fresh()->is_voted );

        Vote::factory()->withObject($review)
            ->create(['user_id' => $user->id]);

        $this->assertTrue( $review->fresh()->is_voted );
    }

    public function test_question_knows_whether_is_it_voted()
    {
        $question = Question::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $question->fresh()->is_voted );

        Vote::factory()->withObject($question)
            ->create(['user_id' => $user->id]);

        $this->assertTrue( $question->fresh()->is_voted );
    }

    public function test_review_knows_its_vote()
    {
        $review = Review::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $review->fresh()->is_voted );

        $vote = Vote::factory()->withObject($review)
            ->create(['user_id' => $user->id, 'value' => -1]);

        $this->assertEquals(-1, $review->fresh()->vote);

        Vote::destroy($vote->id);

        Vote::factory()->withObject($review)
            ->create(['user_id' => $user->id, 'value' => +1]);

        $this->assertEquals(+1, $review->fresh()->vote);

    }

    public function test_question_knows_its_vote()
    {
        $question = Question::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $question->fresh()->is_voted );

        $vote = Vote::factory()->withObject($question)
            ->create(['user_id' => $user->id, 'value' => -1]);

        $this->assertEquals(-1, $question->fresh()->vote);

        Vote::destroy($vote->id);

        Vote::factory()->withObject($question)
            ->create(['user_id' => $user->id, 'value' => +1]);

        $this->assertEquals(+1, $question->fresh()->vote);

    }

    public function test_voted_object_is_available()
    {
        $user = User::factory()->create();

        $question = Question::factory()->create();
        $vote = Vote::factory()->withObject($question)
            ->create(['user_id' => $user->id, 'value' => -1]);

        $this->assertInstanceOf(Question::class, $vote->voted_object);
    }
}
