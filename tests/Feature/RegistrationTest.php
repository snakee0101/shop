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
    public array $data;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = [
            'first_name' => 'Test',
            'last_name' => 'Test',
            'phone' => '+380608143743',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ];
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register-user', $this->data);

        $this->assertAuthenticated();
        $response->assertRedirect( route('account') );
    }

    public function test_user_password_is_hashed_on_registration()
    {
        $response = $this->post('/register-user', $this->data);
        $this->assertTrue( Hash::check('password', User::first()->password) );
    }

    public function test_first_name_is_validated_on_registration()
    {
        $data_invalid_first_name = $this->data;
        $data_invalid_first_name['first_name'] = 'abcd0';
        $this->post('/register-user', $data_invalid_first_name)
             ->assertSessionHasErrorsIn('register', 'first_name');

        $data_invalid_first_name['first_name'] = 'abcd_';
        $this->post('/register-user', $data_invalid_first_name)
            ->assertSessionHasErrorsIn('register','first_name');

        $data_invalid_first_name['first_name'] = 'abc d';
        $this->post('/register-user', $data_invalid_first_name)
            ->assertSessionHasErrorsIn('register','first_name');

        $data_invalid_first_name['first_name'] = 'Test';
        $this->post('/register-user', $data_invalid_first_name)
            ->assertSessionHasNoErrors();
    }

    public function test_last_name_is_validated_on_registration()
    {
        $data_invalid_last_name = $this->data;
        $data_invalid_last_name['last_name'] = 'abcd0';
        $this->post('/register-user', $data_invalid_last_name)
            ->assertSessionHasErrorsIn('register','last_name');

        $data_invalid_last_name['last_name'] = 'abcd_';
        $this->post('/register-user', $data_invalid_last_name)
            ->assertSessionHasErrorsIn('register','last_name');

        $data_invalid_last_name['last_name'] = 'abc d';
        $this->post('/register-user', $data_invalid_last_name)
            ->assertSessionHasErrorsIn('register','last_name');

        $data_invalid_last_name['last_name'] = 'Test';
        $this->post('/register-user', $data_invalid_last_name)
            ->assertSessionHasNoErrors();
    }

    public function test_phone_is_validated_on_registration()
    {
        $data_invalid_phone = $this->data;
        $data_invalid_phone['phone'] = '+38060814374';
        $this->post('/register-user', $data_invalid_phone)
            ->assertSessionHasErrorsIn('register','phone');

        $data_invalid_phone['phone'] = '380608143744';
        $this->post('/register-user', $data_invalid_phone)
            ->assertSessionHasErrorsIn('register','phone');
    }

    public function test_email_is_validated_on_registration()
    {
        $data_invalid_email = $this->data;
        $data_invalid_email['email'] = 'abc572075';
        $this->post('/register-user', $data_invalid_email)
            ->assertSessionHasErrorsIn('register','email');
    }

    public function test_password_is_confirmed_on_registration()
    {
        $data_invalid_password = $this->data;
        $data_invalid_password['password_confirmation'] = 'wrong password';
        $this->post('/register-user', $data_invalid_password)
            ->assertSessionHasErrorsIn('register','password');
    }

    public function test_email_must_be_unique()
    {
        $this->post('/register-user', $this->data);
        $this->assertDatabaseCount('users', 1);

        $other_data_is_unique_except_email = [
            'first_name' => 'Testing',
            'last_name' => 'Testing',
            'phone' => '+380640543743',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ];
        $this->post('/register-user', $other_data_is_unique_except_email)
             ->assertSessionHasErrorsIn('register','email');
    }

    public function test_phone_must_be_unique()
    {
        $this->post('/register-user', $this->data);
        $this->assertDatabaseCount('users', 1);

        $other_data_is_unique_except_phone = [
            'first_name' => 'Testing',
            'last_name' => 'Testing',
            'phone' => '+380608143743',
            'email' => 'testing@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ];
        $this->post('/register-user', $other_data_is_unique_except_phone)
            ->assertSessionHasErrorsIn('register','phone');
    }
}
