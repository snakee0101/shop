<?php

namespace App\Discounts;

class FixedPriceDiscount implements DiscountContract
{
    public static function calculatePrice($initialPrice, $discountValue): float
    {
        return $initialPrice - $discountValue;
    }
}
