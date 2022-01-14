<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = User::factory()->count(4)->create();

        User::factory()->create([   //main user
            'email' => 'test@gmail.com',
        ]);
    }
}
