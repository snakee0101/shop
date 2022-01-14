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
        $wishlist = Wishlist::factory()->create(['is_active' => false]);

        $this->assertDatabaseCount('wishlists', 2);
        $this->actingAs($wishlist->owner);

        $this->delete( route('wishlist.destroy', $wishlist->id) );
        $this->assertDatabaseCount('wishlists', 1);
    }

    public function test_when_user_is_registered_default_wishlist_is_created()
    {
        $data = [
            'first_name' => 'Test',
            'last_name' => 'Test',
            'phone' => '+380608143743',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ];

        $this->post('/register-user', $data);
        $this->assertAuthenticated();

        $this->assertDatabaseHas('wishlists', [
            'user_id' => auth()->id(),
            'is_active' => true
        ]);
    }

    public function test_when_default_wishlist_is_deleted_other_random_wishlist_becomes_default()
    {
        $user = User::factory()->has(Wishlist::factory()->inactive()->count(3), 'wishlists')->create();
        $this->actingAs($user);

        $user->wishlists[0]->update(['is_active' => true]);

        $this->delete( route('wishlist.destroy', $user->wishlists[0]->id) )
             ->assertOk();

        $user->refresh();
        $this->assertTrue($user->wishlists[0]->is_active || $user->wishlists[1]->is_active);
    }

    public function test_wishlist_could_be_shown_to_any_user_who_knows_access_token()
    {
        $wishlist = Wishlist::factory()->create();
        $this->assertDatabaseCount('wishlists', 1);

        $this->get( route('wishlist.show_guest', $wishlist->access_token) )
             ->assertViewHas('wishlists');
    }

    public function test_product_could_be_moved_to_another_wishlist()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->has(Wishlist::factory()->count(2), 'wishlists')->create();
        $product = Product::factory()->create();
        $user->wishlists[0]->products()->attach($product);

        $this->assertCount(1, $user->fresh()->wishlists[0]->products);
        $this->assertCount(0, $user->fresh()->wishlists[1]->products);

        $this->actingAs($user);
        $this->post( route('wishlist.move', [$user->wishlists[0], $product]), [
            'move_to' => $user->wishlists[1]->id,
        ] );

        $this->assertCount(1, $user->fresh()->wishlists[1]->products);
        $this->assertCount(0, $user->fresh()->wishlists[0]->products);
    }

    public function test_a_product_could_be_added_in_a_default_wishlist()
    {
        $user = User::factory()->has(Wishlist::factory()->inactive()->count(2), 'wishlists')->create();
        $product = Product::factory()->create();

        $default_wishlist = Wishlist::first();
        $default_wishlist->update(['is_active' => true]);

        $this->actingAs($user);
        $r = $this->get( route('wishlist_product.toggle_default', $product) );
       // dd( $r->content() );

        $this->assertNotEmpty( $default_wishlist->fresh()->products );
        $this->assertEmpty( Wishlist::all()->get(1)->fresh()->products );
    }
}
