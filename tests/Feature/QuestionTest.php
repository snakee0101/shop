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
    public function test_a_question_could_be_stored()
    {
        $question = Question::factory()->make();
        auth()->login( $question->author );

        $this->post( route('question.store'), $question->toArray() );

        $this->assertDatabaseHas('questions', [
            'comment' => $question->comment
        ]);
    }

    public function test_when_question_is_created_attached_images_are_saved_to_the_filesystem()
    {
        $question = Question::factory()->make();
        auth()->login( $question->author );

        Storage::fake();

        $data = array_merge($question->toArray(), [
            'image-1' => base64_encode('test string') //base64 encoded image
        ]);

        $this->post( route('question.store'), $data );
        $file_url = Storage::files('/public/images')[0];

        Storage::assertExists($file_url);
    }

    public function test_when_question_is_created_attached_images_are_saved_as_model()
    {
        $question = Question::factory()->make();
        auth()->login( $question->author );

        Storage::fake();

        $data = array_merge($question->toArray(), [
            'image-1' => base64_encode('test string') //base64 encoded image
        ]);

        $this->post( route('question.store'), $data );

        $this->assertInstanceOf(Photo::class, Photo::first());
        $this->assertInstanceOf(Photo::class, Question::first()->photos[0]);
    }

    public function test_when_question_is_created_attached_videos_are_saved()
    {
        $question = Question::factory()->make();
        auth()->login( $question->author );

        $data = array_merge($question->toArray(), [
            'video-1' => 'test url'
        ]);

        $this->post( route('question.store'), $data );
        $this->assertInstanceOf(Video::class, Video::first());
        $this->assertInstanceOf(Video::class, Question::first()->videos[0]);
    }

    public function test_question_comment_is_required()
    {
        $question = Question::factory()->make();
        auth()->login( $question->author );

        $question_array = $question->toArray();
        $question_array['comment'] = '';

        $this->post( route('question.store'),  $question_array)
            ->assertSessionHasErrors('comment');
    }
}
