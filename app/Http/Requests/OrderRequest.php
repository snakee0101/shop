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
            'address' => 'required',
            'apartment' => 'numeric',
            'post_office_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'numeric|size:5',
        ];
    }
}
