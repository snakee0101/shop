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

    public function test_a_product_could_be_toggled_from_wishlist()
    {
        $product = Product::factory()->create();
        $wishlist = Wishlist::factory()->create();

        $wishlist->products()->attach($product);
        $this->assertNotEmpty( $wishlist->fresh()->products );

        $this->actingAs($wishlist->owner);

        $this->post( route('wishlist_product.toggle', [$wishlist, $product]) );
        $wishlist->refresh();
        $this->assertEmpty( $wishlist->products );


        $this->post( route('wishlist_product.toggle', [$wishlist, $product]) );
        $wishlist->refresh();
        $this->assertNotEmpty( $wishlist->products );
    }

    public function test_wishlist_could_be_selected_as_default()
    {
        $users = User::factory()->count(2)
                                ->has(Wishlist::factory()->inactive(), 'wishlists')
                                ->create();

        $this->actingAs($users[0]);

        $this->get("/wishlist/{$users[0]->wishlists[0]->id}/set_default");
        $this->assertTrue( $users[0]->wishlists[0]->fresh()->is_active );
    }

    public function test_when_wishlist_is_set_as_default_other_wishlists_inactivated()
    {
        $user = User::factory()->has(Wishlist::factory()
                                             ->count(3)
                                             ->inactive(), 'wishlists')->create();
        $user->wishlists[0]->update(['is_active' => true]);

        $this->actingAs($user);
        $this->get("/wishlist/{$user->wishlists[2]->id}/set_default");

        $this->assertFalse( $user->fresh()->wishlists[0]->is_active );
        $this->assertFalse( $user->fresh()->wishlists[1]->is_active );
        $this->assertTrue( $user->fresh()->wishlists[2]->is_active );
    }

    public function test_wishlist_could_be_renamed()
    {
        $user = User::factory()->has(Wishlist::factory(), 'wishlists')->create();

        $this->actingAs($user);

        $this->put( route('wishlist.update', $user->wishlists[0]->id), ['name' => 'new name'] );
        $this->assertEquals('new name', Wishlist::first()->name);
    }

    public function test_wishlist_could_be_created()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->post( route('wishlist.store'), ['name' => 'new name'] );
        $this->assertDatabaseCount('wishlists', 1);
    }

    public function test_wishlist_could_be_set_as_default_when_created()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->post( route('wishlist.store'), ['name' => 'new name', 'default' => true] );
        $this->assertTrue( Wishlist::first()->is_active );

        $this->post( route('wishlist.store'), ['name' => 'name 2', 'default' => false] );
        $this->assertFalse( Wishlist::firstWhere('name', 'name 2')->is_active );
    }

    public function test_when_created_wishlist_is_set_to_default_other_wishlists_are_inactivated()
    {
        $user = User::factory()->has(Wishlist::factory(), 'wishlists')->create();
        $this->actingAs($user);

        $this->post( route('wishlist.store'), ['name' => 'new name', 'default' => true] );
        $this->assertTrue( Wishlist::whereName('new name')->first()->is_active );
        $this->assertFalse( Wishlist::where('name', '!=', 'new name')->first()->is_active );
    }

    public function test_wishlist_could_be_deleted()
    {
        $wishlist = Wishlist::factory()->create();
        $this->assertDatabaseCount('wishlists', 1);
        $this->actingAs($wishlist->owner);

        $this->delete( route('wishlist.destroy', $wishlist->id) );
        $this->assertDatabaseCount('wishlists', 0);
    }

    public function test_a_product_could_be_added_in_a_default_wishlist()
    {

    }
}
