<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    public function run()
    {
        foreach(User::all() as $user)
            Wishlist::factory()->withUser($user)->create();
    }
}
