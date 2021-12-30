<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class WishlistTest extends TestCase
{
    public function test_wishlist_belongs_to_a_user()
    {
        $wishlist = Wishlist::factory()->create();
        $this->assertInstanceOf(User::class, $wishlist->owner);
    }

    public function test_user_has_many_wishlists()
    {
        $user = User::factory()->create();
        Wishlist::factory()->count(2)
                           ->for($user, 'owner')
                           ->create();

        $user->refresh();
        $this->assertInstanceOf(Wishlist::class, $user->wishlists[0]);
        $this->assertCount(2, $user->wishlists);
    }

    public function test_wishlist_has_many_products()
    {
        $products = Product::factory()->count(2)->create();
        $wishlist = Wishlist::factory()->create();
        DB::table('product_wishlist')->insert([[
            'wishlist_id' => $wishlist->id,
            'product_id' => $products[0]->id,
            'created_at' => now()
        ], [
            'wishlist_id' => $wishlist->id,
            'product_id' => $products[1]->id,
            'created_at' => now()
        ]]);

        $wishlist->refresh();
        $this->assertCount(2, $wishlist->products);
        $this->assertInstanceOf(Product::class, $wishlist->products[0]);
    }

    public function test_wishlist_product_relation_stores_a_timestamp_when_it_was_created()
    {
        $product = Product::factory()->create();
        $wishlist = Wishlist::factory()->create();

        $wishlist->products()->attach($product);
        $wishlist->refresh();

        $this->assertNotNull(DB::table('product_wishlist')->get()->first()->created_at);
    }

    public function test_wishlist_products_appear_in_json()
    {
        $products = Product::factory()->count(3)->create();
        $wishlist = Wishlist::factory()->create();

        $wishlist->products()->attach($products);
        $wishlist->refresh();

        $wishlist_json = $wishlist->toJson();
        $wishlist_json_object = json_decode($wishlist_json);

        $this->assertEquals($products[0]->description, $wishlist_json_object->products_json[0]->description);
    }
}
