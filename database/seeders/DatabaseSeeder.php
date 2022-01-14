<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([UserSeeder::class,
                     WishlistSeeder::class,
                     CategorySeeder::class,
                     CharacteristicsSeeder::class,
                     ProductSeeder::class,
                     CharacteristicProductSeeder::class]);
    }
}
