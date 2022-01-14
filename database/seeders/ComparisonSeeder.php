<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComparisonSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function($user){
            foreach (Category::take(2)->get() as $category) {
                foreach ($category->products()->inRandomOrder()->take(3)->get() as $product) {
                    try {
                        DB::table('comparison')->insert([
                            'product_id' => $product->id,
                            'user_id' => $user->id
                        ]);
                    } catch(\Exception $e) {
                        continue;
                    }
                }
            }
        });


    }
}
