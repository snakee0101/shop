<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OrderPostOfficeAddress implements Rule
{
    private $apartment;

    public function __construct($apartment)
    {
        $this->apartment = $apartment;
    }

    public function passes($attribute, $value)
    {
        //if there is post office address - apartment must not be present
        return !($value != '') || is_null($this->apartment);
    }

    public function message()
    {
        return 'Apartment must not be stated when post office address is present';
    }
}
