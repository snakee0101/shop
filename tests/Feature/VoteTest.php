<?php

namespace Tests\Feature;

use App\Models\Question;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoteTest extends TestCase
{
    private $review, $question, $review_vote_data, $question_vote_data;

    protected function setUp(): void
    {
        parent::setUp();

        $this->review = Review::factory()->create();
        $this->question = Question::factory()->create();

        $this->review_vote_data = [
            'object_id' => $this->review->id,
            'object_type' => Review::class,
            'value' => -1
        ];

        $this->question_vote_data = [
            'object_id' => $this->question->id,
            'object_type' => Question::class,
            'value' => -1
        ];
    }

    public function test_review_could_be_votes()
    {
        $this->actingAs( $this->review->author );

        $this->post( route('vote.store'), $this->review_vote_data);
        $this->assertDatabaseHas('votes', $this->review_vote_data);
    }

    public function test_when_review_is_voted_statistics_is_returned()
    {
        $this->actingAs( $this->review->author );

        $this->post( route('vote.store'), $this->review_vote_data)
             ->assertJson([
                'for_count' => 0,
                'against_count' => 1
             ]);
    }

    public function test_question_could_be_votes()
    {
        $this->actingAs( $this->question->author );

        $this->post( route('vote.store'), $this->question_vote_data);
        $this->assertDatabaseHas('votes', $this->question_vote_data);
    }

    public function test_when_question_is_voted_statistics_is_returned()
    {
        $this->actingAs( $this->question->author );

        $this->post( route('vote.store'), $this->question_vote_data)
            ->assertJson([
                'for_count' => 0,
                'against_count' => 1
            ]);
    }
}
