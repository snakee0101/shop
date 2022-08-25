<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = User::factory()->count(4)->create();

        User::factory()->create([   //main user
            'email' => 'test@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
