<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Review;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    public function run()
    {
        foreach (Question::inRandomOrder()->take(20)->get() as $question) {
            Vote::factory()->withObject($question)->create([
                'user_id' => User::inRandomOrder()->first()->id
            ]);
        }

        foreach (Review::inRandomOrder()->take(20)->get() as $review) {
            Vote::factory()->withObject($review)->create([
                'user_id' => User::inRandomOrder()->first()->id
            ]);
        }
    }
}
