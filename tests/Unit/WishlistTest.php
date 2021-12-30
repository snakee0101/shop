<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Wishlist;
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
}
