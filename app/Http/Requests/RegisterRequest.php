<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    protected $errorBag = 'register';

    public function rules()
    {
        return [
            'first_name' => 'alpha',
            'last_name' => 'alpha',
            'phone' => 'unique:users,phone|regex:/\+\d{12}/',
            'email' => 'email|unique:users,email',
            'password' => 'confirmed'
        ];
    }
}
