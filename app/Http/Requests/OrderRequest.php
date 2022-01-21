<?php

namespace App\Http\Requests;

use App\Rules\OrderPostOfficeAddress;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class OrderRequest extends FormRequest
{
    private function performEmptyCartCheck(Validator $validator): void
    {
        if (\Cart::isEmpty())
            throw (new ValidationException($validator,
                response()->view('checkout', [
                    'message' => 'Your Cart is empty - select products to order first',
                    'cart_items' => \Cart::getContent()
                ])
            ))->redirectTo($this->getRedirectUrl());
    }

    /**
     * Don't proceed to validation if the Cart is empty.
     */
    protected function failedValidation(Validator $validator)
    {
        $this->performEmptyCartCheck($validator);

        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }

    protected function passedValidation()
    {
        $this->performEmptyCartCheck();
    }

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
                'post_office_address' => ['required_without:address', new OrderPostOfficeAddress(request())],
                'city' => 'required',
                'state' => 'required',
                'postcode' => 'digits:5',
                'shipping_date' => 'date_format:Y-m-d H:i:s'
            ];
    }
}
