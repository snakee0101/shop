<?php

namespace Tests\Unit;

use App\Models\Question;
use App\Models\Video;
use App\Models\Product;
use App\Models\Review;
use Tests\TestCase;

class VideoTest extends TestCase
{
    public function test_review_has_videos()
    {
        $review = Review::factory()->create();
        Video::factory()->withObject($review)->create();

        $this->assertInstanceOf(Video::class, $review->videos()->first());
    }

    public function test_question_has_videos()
    {
        $question = Question::factory()->create();
        Video::factory()->withObject($question)->create();

        $this->assertInstanceOf(Video::class, $question->videos()->first());
    }

    public function test_product_has_videos()
    {
        $product = Product::factory()->create();
        Video::factory()->withObject($product)->create();

        $this->assertInstanceOf(Video::class, $product->videos()->first());
    }

    public function test_video_can_access_object_it_attached_to()
    {
        $product = Product::factory()->create();
        $video = Video::factory()->withObject($product)->create();

        $this->assertInstanceOf(Product::class, $video->object);
    }
}
