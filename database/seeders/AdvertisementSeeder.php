<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class AdvertisementSeeder extends Seeder
{
    public function run()
    {
        $ads = new Collection();

        for($i = 0; $i < 17; $i++)
        {
            $ad = Advertisement::factory()
                ->withCategory( Category::inRandomOrder()->first() )
                ->create();

            $ads->add($ad);
        }

        for($i = 0; $i < 4; $i++)
        {
            $ad = Advertisement::factory()->create();
            $ads->add($ad);
        }

        $ads->each(function($ad) {
            $products = Product::inRandomOrder()->limit(10)->get();
            $ad->products()->attach( $products );
        });
    }
}
