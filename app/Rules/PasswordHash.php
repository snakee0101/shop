<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class PasswordHash implements Rule
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function passes($attribute, $value)
    {
        return Hash::check($value, User::firstWhere('email', $this->email)->password);
    }

    public function message()
    {
        return 'The password does not match user password';
    }
}
