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
        $this->assertInstanceOf(User::class, Wishlist::factory()->create()->owner);
    }

    public function test_user_has_many_wishlists()
    {
        $user = User::factory()->create();
        Wishlist::factory()->count(2)
                           ->for($user, 'owner')
                           ->create();

        $this->assertInstanceOf(Wishlist::class, $user->wishlists[0]);
        $this->assertCount(2, $user->wishlists);
    }

    public function test_user_can_get_their_default_wishlist()
    {
        $user = User::factory()->create();
        $w1 = Wishlist::factory()->for($user, 'owner')
                                 ->create(['is_active' => false]);

        $default_wishlist = Wishlist::factory()->for($user, 'owner')
                                 ->create(['is_active' => true]);

        $this->assertEquals($default_wishlist->id, $user->default_wishlist->id);
    }

    public function test_default_wishlist_for_a_specific_user_could_be_created()
    {
        Wishlist::createDefault($user = User::factory()->create());

        $this->assertDatabaseHas('wishlists', [
            'user_id' => $user->id,
            'is_active' => true
        ]);
    }

    public function test_wishlist_has_many_products()
    {
        $products = Product::factory()->count(2)->create();
        $wishlist = Wishlist::factory()->create();

        DB::table('product_wishlist')->insert([[
            'wishlist_id' => $wishlist->id,
            'product_id' => $products[0]->id,
        ], [
            'wishlist_id' => $wishlist->id,
            'product_id' => $products[1]->id,
        ]]);

        $this->assertCount(2, $wishlist->products);
        $this->assertInstanceOf(Product::class, $wishlist->products[0]);
    }

    public function test_wishlist_product_relation_stores_a_timestamp_when_it_was_created()
    {
        $wishlist = Wishlist::factory()->create();

        $wishlist->products()->attach( $product = Product::factory()->create() );

        $this->assertDatabaseMissing('product_wishlist', ['created_at' => null] );
        $this->assertDatabaseHas('product_wishlist', ['product_id' => $product->id] );
    }

    public function test_wishlist_products_appear_in_json()
    {
        $wishlist = Wishlist::factory()->create();

        $wishlist->products()->attach( $products = Product::factory()
                                                          ->count(2)
                                                          ->create() );

        $this->assertStringContainsString($products[0]->description, $wishlist->load('products')->toJson());
    }

    public function test_wishlist_name_must_be_unique()
    {
        $this->expectExceptionMessage('UNIQUE constraint failed');

        Wishlist::factory()->createMany([
            ['name' => 'name 1'],
            ['name' => 'name 1']
        ]);
    }

    public function test_when_wishlist_is_deleted_attached_products_are_also_removed_from_pivot_table()
    {
        $wishlist = Wishlist::factory()->create();
        $wishlist->products()->attach(
            Product::factory()->count(2)->create()
        );

        $this->assertDatabaseCount('product_wishlist', 2);

        $wishlist->delete();
        $this->assertDatabaseCount('product_wishlist', 0);
    }
}
