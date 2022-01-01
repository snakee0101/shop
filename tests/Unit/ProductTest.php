<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_product_can_determine_whether_it_is_in_a_wishlist()
    {
        $wishlist = Wishlist::factory()->create();
        $product = Product::factory()->create();
        $product2 = Product::factory()->create();

        $wishlist->products()->attach($product);

        $this->assertTrue( $product->fresh()->inWishlist($wishlist) );
        $this->assertFalse( $product2->inWishlist($wishlist) );
    }
}
