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
            'address' => 'required_without:post_office_address',
            'apartment' => 'numeric|nullable',
            'post_office_address' => 'required_without:address',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'size:5',
            'shipping_date' => 'date_format:Y-m-d H:i:s'
        ];
    }
}
