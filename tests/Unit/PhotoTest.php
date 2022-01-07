<?php

namespace Tests\Unit;

use App\Models\Photo;
use App\Models\Product;
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

    public function test_product_has_photos()
    {
          $product = Product::factory()->create();
          $photo = Photo::factory()->withObject($product)->create();

          $this->assertInstanceOf(Photo::class, $product->fresh()->photos()->first());
    }

    public function test_photo_returns_storage_url_when_converted_to_json()
    {
        $product = Product::factory()->create();
        $photo = Photo::factory()->withObject($product)->create([
            'url' => '/storage//images/1641568704048d0127-9602-4e9a-9f1f-ec346e0db7e3.jpg'
        ]);

        $this->assertEquals(Storage::url('/storage//images/1641568704048d0127-9602-4e9a-9f1f-ec346e0db7e3.jpg'), $photo->storage_url);
        $this->assertStringContainsString('storage_url', $photo->toJson());
    }
}
