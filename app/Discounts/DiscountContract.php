<?php

namespace App\Discounts;

interface DiscountContract
{
    public static function apply($initialPrice, $discountValue) :float;
}
