<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
                     UserSeeder::class,
                     WishlistSeeder::class,
                     CategorySeeder::class,
                     CharacteristicsSeeder::class,
                     ProductSeeder::class,
                     CharacteristicProductSeeder::class,
                     ProductWishlistSeeder::class,
                     ComparisonSeeder::class,
                     ProductSetSeeder::class,
                     ReviewSeeder::class,
                     QuestionSeeder::class,
                     ReplySeeder::class,
                     ReportSeeder::class,
                     VoteSeeder::class,
                     PhotoSeeder::class,
                     OrderSeeder::class,
                     DiscountSeeder::class,
                     ContactFormMessageSeeder::class,
                     BadgeSeeder::class,
                     TagSeeder::class,
                     NewsCategorySeeder::class
        ]);
    }
}
