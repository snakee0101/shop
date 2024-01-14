<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        foreach (Product::all() as $product)
        {
            Photo::factory()->count( random_int(2,5) )
                            ->withObject($product)
                            ->create(['user_id' => User::inRandomOrder()->first()]);
        }
    }
}
