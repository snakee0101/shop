<?php

namespace Tests\Unit;

use App\Models\Photo;
use App\Models\Product;
use Tests\TestCase;

class PhotoTest extends TestCase
{
    public function test_review_has_photos()
    {
//        $obj = Product::factory()->create();
//        dd( Photo::factory()->withObject($obj)->make() );
    }

    public function test_product_has_photos()
    {
          $product = Product::factory()->create();
          $photo = Photo::factory()->withObject($product)->create();

          $this->assertInstanceOf(Photo::class, $product->fresh()->photos()->first());
    }
}
