<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    protected $errorBag = 'login';

    public function rules()
    {
        return [
            'login_email' => 'required|exists:users,email',
            'login_password' => ['required', new \App\Rules\PasswordHash( request('login_email') )]
        ];
    }
}
