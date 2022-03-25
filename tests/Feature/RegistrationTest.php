<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
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

    private function register(array $invalid_data): TestResponse
    {
        return $this->post('/register-user', array_merge($this->data, $invalid_data))
            ->assertSessionHasErrorsIn('register', array_key_first($invalid_data)); //key of array's first item (for example, first_name) is a request parameter name
    }

    public function test_new_users_can_register()
    {
        $this->post('/register-user', $this->data)
            ->assertRedirect(route('account'));

        $this->assertAuthenticated();
    }

    public function test_after_registration_comparison_access_token_is_attached_to_the_user()
    {
        $this->post('/register-user', $this->data);

        $this->assertNotNull(User::first()->comparison_access_token);
    }

    public function test_user_password_is_hashed_on_registration()
    {
        $this->post('/register-user', $this->data);
        $this->assertTrue(Hash::check('password', User::first()->password));
    }

    public function test_first_name_is_validated_on_registration()
    {
        $this->register(['first_name' => 'abcd0']);
        $this->register(['first_name' => 'abcd_']);
        $this->register(['first_name' => 'abc d']);
    }

    public function test_last_name_is_validated_on_registration()
    {
        $this->register(['last_name' => 'abcd0']);
        $this->register(['last_name' => 'abcd_']);
        $this->register(['last_name' => 'abc d']);
    }

    public function test_phone_is_validated_on_registration()
    {
        $this->register(['phone' => '+38060814374']);
        $this->register(['phone' => '380608143744']);
    }

    public function test_email_is_validated_on_registration()
    {
        $this->register(['email' => 'abc572075']);
    }

    public function test_password_is_required_on_registration()
    {
        $this->register(['password' => '', 'password_confirmation' => '']);
    }

    public function test_password_is_confirmed_on_registration()
    {
        $this->register(['password' => 'password', 'password_confirmation' => 'wrong password']);
    }

    public function test_email_must_be_unique()
    {
        $this->post('/register-user', $this->data);
        $this->assertDatabaseCount('users', 1);

        $this->post('/register-user', [
            'first_name' => 'Testing',
            'last_name' => 'Testing',
            'phone' => '+380640543743',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ])->assertSessionHasErrorsIn('register', 'email');
    }

    public function test_phone_must_be_unique()
    {
        $this->post('/register-user', $this->data);
        $this->assertDatabaseCount('users', 1);

        $this->post('/register-user', [
            'first_name' => 'Testing',
            'last_name' => 'Testing',
            'phone' => '+380608143743',
            'email' => 'testing@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ])->assertSessionHasErrorsIn('register', 'phone');
    }

    public function test_a_user_can_log_in()
    {
        $this->post('/login-user', [
            'login_email' => User::factory()->create()->email,
            'login_password' => 'password',
        ])->assertRedirect(route('account'));

        $this->assertAuthenticated();
    }

    public function test_a_user_can_log_in_only_with_valid_password()
    {
        $user = User::factory()->create();
        $this->post('/login-user', [
            'login_email' => $user->email,
            'login_password' => 'invalid password',
        ])->assertSessionHasErrorsIn('login', 'login_password');

        $this->post('/login-user', [
            'login_email' => $user->email,
            'login_password' => 'password',
        ])->assertSessionHasNoErrors();
    }
}
