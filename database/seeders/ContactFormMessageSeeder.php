<?php

namespace Database\Seeders;

use App\Models\ContactFormMessage;
use App\Models\Reply;
use Illuminate\Database\Seeder;

class ContactFormMessageSeeder extends Seeder
{
    public function run()
    {
        ContactFormMessage::factory()->count(5)->create();

        ContactFormMessage::factory()->count(3)->create([
            'is_read' => true
        ]);


        ContactFormMessage::factory()->has(Reply::factory(), 'reply')->count(3)->create([
            'is_replied' => true
        ]);
    }
}
