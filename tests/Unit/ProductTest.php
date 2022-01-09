<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Review;
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

    public function test_product_can_determine_whether_it_is_in_a_default_wishlist()
    {
        $user = User::factory()->create();

        $default_wishlist = Wishlist::factory()->create(['user_id' => $user]);
        $wishlist2 = Wishlist::factory()->inactive()->create(['user_id' => $user]);
        $product = Product::factory()->create();

        $this->actingAs( $user );
        $default_wishlist->products()->attach($product);
        $this->assertTrue( $product->fresh()->inDefaultWishlist );

        $default_wishlist->products()->detach($product);
        $this->assertFalse( $product->fresh()->inDefaultWishlist );
    }

    public function test_product_knows_reviews_count()
    {
        $product = Product::factory()->create();
        Review::factory()->count(4)->create([
            'product_id' => $product
        ]);

        $this->assertEquals(4, $product->fresh()->reviews_count);
    }
}
