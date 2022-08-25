<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Report;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    public function run()
    {
        foreach (Question::inRandomOrder()->take(5)->get() as $question) {
            Report::factory()->withObject($question)->create([
                'user_id' => User::inRandomOrder()->first()->id
            ]);
        }

        foreach (Review::inRandomOrder()->take(5)->get() as $review) {
            Report::factory()->withObject($review)->create([
                'user_id' => User::inRandomOrder()->first()->id
            ]);
        }
    }
}
