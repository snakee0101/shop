<?php

namespace App\Http\Requests;

use App\Rules\OrderPostOfficeAddress;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules()
    {
        if(auth()->check())
            $credentials_rules = [
                'first_name' => 'alpha',
                'last_name' => 'alpha',
                'phone' => 'regex:/\+\d{12}/',
                'email' => 'email',
            ];
        else
            $credentials_rules = [
                'first_name' => 'required|alpha',
                'last_name' => 'required|alpha',
                'phone' => 'required|regex:/\+\d{12}/',
                'email' => 'required|email',
            ];

        return $credentials_rules + ['address' => 'required_without:post_office_address',
            'apartment' => 'numeric|nullable',
            'post_office_address' => ['required_without:address', new OrderPostOfficeAddress( request('apartment') )],
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'digits:5',
            'shipping_date' => 'date_format:Y-m-d H:i:s'
        ];
    }
}
