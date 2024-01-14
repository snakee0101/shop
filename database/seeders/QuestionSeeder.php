<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        foreach (Product::all() as $product)
        {
            foreach (User::inRandomOrder()->take(3)->get() as $question_author) {
                Question::factory()->create([
                    'user_id' => $question_author->id,
                    'product_id' => $product->id
                ]);
            }
        }
    }
}
