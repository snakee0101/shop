<?php

namespace Tests\Feature;

use App\Models\Photo;
use App\Models\Question;
use App\Models\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    private function generateQuestion($convert_to_array = false)
    {
        $question = Question::factory()->make();
        auth()->login( $question->author );

        Storage::fake();

        return $convert_to_array ? $question->toArray() : $question;
    }

    public function test_a_question_could_be_stored()
    {
        $question = $this->generateQuestion();

        $this->post( route('question.store'), $question->toArray() );

        $this->assertDatabaseHas('questions', [
            'comment' => $question->comment
        ]);
    }

    public function test_when_question_is_created_attached_images_are_saved_to_the_filesystem()
    {
        $this->post( route('question.store'), $this->generateQuestion(true) + [
            'image-1' => base64_encode('test string') //base64 encoded image
        ]);

        Storage::assertExists($file_url = Storage::files('/public/images')[0]);
    }

    public function test_when_question_is_created_attached_images_are_saved_as_model()
    {
        $this->post( route('question.store'), $this->generateQuestion(true) + [
            'image-1' => base64_encode('test string') //base64 encoded image
        ]);

        $this->assertNotNull( Photo::first() );
        $this->assertInstanceOf(Photo::class, Question::first()->photos[0]);
    }

    public function test_when_question_is_created_attached_videos_are_saved()
    {
        $this->post( route('question.store'), $this->generateQuestion(true) + [
            'video-1' => 'test url'
        ]);

        $this->assertNotNull( Video::first() );
        $this->assertInstanceOf(Video::class, Question::first()->videos[0]);
    }

    public function test_question_comment_is_required()
    {
        $this->post( route('question.store'),  [...$this->generateQuestion(true), ...['comment' => '']])
             ->assertSessionHasErrors('comment');
    }
}
