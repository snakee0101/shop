<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    public function test_a_product_has_reviews()
    {
       $product = Product::factory()->create();

       Review::factory()->create([
           'product_id' => $product
       ]);

       $this->assertInstanceOf(Review::class, $product->reviews[0]);
    }

    public function test_a_review_has_an_author()
    {
        $this->assertInstanceOf(User::class, Review::factory()->create()->author);
    }

    public function test_review_belongs_to_a_product()
    {
        $review = Review::factory()->create([
            'product_id' => Product::factory()->create()->id
        ]);

        $this->assertInstanceOf(Product::class, $review->product);
    }
}
