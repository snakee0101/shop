<?php

namespace App\Discounts;

class FixedPriceDiscount implements DiscountContract
{
    public static function apply($initialPrice, $discountValue): float
    {
        return $initialPrice - $discountValue;
    }
}
