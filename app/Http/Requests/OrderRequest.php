<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => 'alpha',
            'last_name' => 'alpha',
            'phone' => 'regex:/\+\d{12}/',
            'email' => 'email',
        ];
    }
}
