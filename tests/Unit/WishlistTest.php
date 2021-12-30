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
}
