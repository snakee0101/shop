<?php

namespace Tests\Feature;

use App\Models\User;
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
}
