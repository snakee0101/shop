<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponCodeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'code' => 'exists:discounts,coupon_code'
        ];
    }

    public function messages()
    {
        return [
            'code' => "Coupon with specified code doesn\'t exist"
        ];
    }
}
