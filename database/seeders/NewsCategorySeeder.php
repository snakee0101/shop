<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    public function run()
    {
        NewsCategory::factory()
                    ->count(5)
                    ->create();

        NewsCategory::factory()
            ->withParentNewsCategory( NewsCategory::first() )
            ->count(2)
            ->create();
    }
}
