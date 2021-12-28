<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_users_can_register()
    {
        $response = $this->post('/register-user', [
            'first_name' => 'Test User',
            'last_name' => 'Test User',
            'phone' => '+380608143743',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect( route('account') );
    }

    public function test_user_password_is_hashed_on_registration()
    {
        $response = $this->post('/register-user', [
            'first_name' => 'Test User',
            'last_name' => 'Test User',
            'phone' => '+380608143743',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $this->assertTrue( Hash::check('password', User::first()->password) );
    }
}
