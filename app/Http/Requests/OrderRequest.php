<?php

namespace App\Http\Requests;

use App\Rules\OrderPostOfficeAddress;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules()
    {
        $credentials_rules = [
            'first_name' => "regex:/[a-zA-Z\s'-]+/",
            'last_name' => "regex:/[a-zA-Z\s'-]+/",
            'phone' => 'regex:/\+\d{12}/',
            'email' => 'email',
        ];

        if (!auth()->check())
            $credentials_rules = array_map(fn($item) => 'required|' . $item, $credentials_rules);

        return $credentials_rules + ['address' => 'required_without:post_office_address',
                'apartment' => 'numeric|nullable',
                'post_office_address' => ['required_without:address', new OrderPostOfficeAddress(request('apartment'))],
                'city' => 'required',
                'state' => 'required',
                'postcode' => 'digits:5',
                'shipping_date' => 'date_format:Y-m-d H:i:s'
            ];
    }
}
