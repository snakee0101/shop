<?php

namespace Tests\Unit;

use App\Models\Photo;
use App\Models\Product;
use App\Models\Question;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PhotoTest extends TestCase
{
    public function test_review_has_photos()
    {
        $review = Review::factory()->create();
        $photo = Photo::factory()->withObject($review)->create();

        $this->assertInstanceOf(Photo::class, $review->fresh()->photos()->first());
    }

    public function test_question_has_photos()
    {
        $question = Question::factory()->create();
        $photo = Photo::factory()->withObject($question)->create();

        $this->assertInstanceOf(Photo::class, $question->fresh()->photos()->first());
    }

    public function test_product_has_photos()
    {
          $product = Product::factory()->create();
          $photo = Photo::factory()->withObject($product)->create();

          $this->assertInstanceOf(Photo::class, $product->fresh()->photos()->first());
    }
}
