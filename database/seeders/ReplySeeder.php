<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Reply;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReplySeeder extends Seeder
{
    public function run()
    {
        foreach (Question::inRandomOrder()->take(20)->get() as $question)
        {
            foreach (User::inRandomOrder()->take(3)->get() as $author)
            {
                Reply::factory()->withObject($question)->create([
                    'user_id' => $author->id
                ]);
            }
        }

        foreach (Review::inRandomOrder()->take(20)->get() as $review)
        {
            foreach (User::inRandomOrder()->take(3)->get() as $author)
            {
                Reply::factory()->withObject($review)->create([
                    'user_id' => $author->id
                ]);
            }
        }

    }
}
