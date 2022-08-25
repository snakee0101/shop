<?php

namespace Tests\Unit;

use App\Models\Question;
use App\Models\Review;
use App\Models\User;
use App\Models\Vote;
use Tests\TestCase;

class VoteTest extends TestCase
{
    private function voteFor($object, $count = 1, $vote = +1)
    {
        Vote::factory()->count($count)
            ->withObject($object)
            ->create(['value' => $vote]);
    }

    private function voteForWithAuthor($object, $user, $count = 1, $vote = +1)
    {
        return Vote::factory()->count($count)
                              ->withObject($object)
                              ->create(['value' => $vote, 'user_id' => $user->id]);
    }

    public function test_review_has_many_votes()
    {
        $review = Review::factory()->create();

        $this->voteFor($review, 2);

        $this->assertInstanceOf(Vote::class, $review->votes[0]);
        $this->assertCount(2, $review->votes);
    }

    public function test_question_has_many_votes()
    {
        $question = Question::factory()->create();

        $this->voteFor($question, 2);

        $this->assertInstanceOf(Vote::class, $question->votes[0]);
        $this->assertCount(2, $question->votes);
    }

    public function test_review_knows_its_votes_statistics()
    {
        $review = Review::factory()->create();

        $this->voteFor($review, 3);
        $this->voteFor($review, 2, -1);

        $this->assertEquals([
            'for_count' => 3,
            'against_count' => 2
        ], $review->vote_statistics);
    }

    function test_question_knows_its_votes_statistics()
    {
        $question = Question::factory()->create();

        $this->voteFor($question, 3);
        $this->voteFor($question, 2, -1);

        $this->assertEquals([
            'for_count' => 3,
            'against_count' => 2
        ], $question->vote_statistics);
    }

    public function test_review_knows_whether_is_it_voted()
    {
        $review = Review::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $review->is_voted );

        $this->voteForWithAuthor($review, $user);

        $this->assertTrue( $review->fresh()->is_voted );
    }

    public function test_question_knows_whether_is_it_voted()
    {
        $question = Question::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $question->is_voted );

        $this->voteForWithAuthor($question, $user);

        $this->assertTrue( $question->fresh()->is_voted );
    }

    public function test_review_knows_its_vote()
    {
        $review = Review::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $review->is_voted );

        $vote = $this->voteForWithAuthor($review, $user, 1, -1)
                     ->first();

        $this->assertEquals(-1, $review->fresh()->vote);

        $vote->delete();

        $this->voteForWithAuthor($review, $user, 1, +1);

        $this->assertEquals(+1, $review->fresh()->vote);

    }

    public function test_question_knows_its_vote()
    {
        $question = Question::factory()->create();
        $this->actingAs($user = User::factory()->create());

        $this->assertFalse( $question->is_voted );

        $vote = $this->voteForWithAuthor($question, $user, 1, -1)
                     ->first();

        $this->assertEquals(-1, $question->fresh()->vote);

        $vote->delete();

        $this->voteForWithAuthor($question, $user, 1, +1);

        $this->assertEquals(+1, $question->fresh()->vote);

    }

    public function test_voted_object_is_available()
    {
        $user = User::factory()->create();

        $question = Question::factory()->create();
        $vote = $this->voteForWithAuthor($question, $user, 1, -1)
                     ->first();

        $this->assertInstanceOf(Question::class, $vote->voted_object);
    }
}
