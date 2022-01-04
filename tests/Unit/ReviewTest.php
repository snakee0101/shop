<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Review;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    public function test_a_product_has_reviews()
    {
       $product = Product::factory()->create();

       Review::factory()->create([
           'product_id' => $product
       ]);

       $this->assertInstanceOf(Review::class, $product->fresh()->reviews[0]);
    }
}
