<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OrderPostOfficeAddress implements Rule
{
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function passes($attribute, $value)
    {
        //if there is post office address - apartment and address must not be present
        return !($value != '') || (is_null($this->request->apartment) && is_null($this->request->address));
    }

    public function message()
    {
        return 'Apartment and address must not be stated when post office address is present';
    }
}
