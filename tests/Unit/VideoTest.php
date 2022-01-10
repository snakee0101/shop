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
        $video = Video::factory()->withObject($review)->create();

        $this->assertInstanceOf(Video::class, $review->fresh()->videos()->first());
    }

    public function test_question_has_videos()
    {
        $question = Question::factory()->create();
        $video = Video::factory()->withObject($question)->create();

        $this->assertInstanceOf(Video::class, $question->fresh()->videos()->first());
    }

    public function test_product_has_videos()
    {
        $product = Product::factory()->create();
        $video = Video::factory()->withObject($product)->create();

        $this->assertInstanceOf(Video::class, $product->fresh()->videos()->first());
    }
}
