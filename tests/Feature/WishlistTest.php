<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WishlistTest extends TestCase
{
    public function test_wishlist_could_be_viewed_only_by_authenticated_users()
    {
        $this->get( route('wishlist.index') )
             ->assertRedirect( route('account') );

        $this->actingAs( User::factory()->create() );
        $this->get( route('wishlist.index') )
            ->assertOk();
    }

    public function test_a_product_could_be_removed_from_wishlist()
    {
        $product = Product::factory()->create();
        $wishlist = Wishlist::factory()->create();

        $wishlist->products()->attach($product);
        $this->assertNotEmpty( $wishlist->fresh()->products );

        $this->actingAs($wishlist->owner);
        $this->delete( route('wishlist_product.destroy', [$wishlist, $product]) );

        $wishlist->refresh();
        $this->assertEmpty( $wishlist->products );
    }

    public function test_a_product_could_be_added_in_a_default_wishlist()
    {

    }
}
