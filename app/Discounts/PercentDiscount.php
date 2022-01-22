<?php

namespace App\Discounts;

class PercentDiscount implements DiscountContract
{
    public static function calculatePrice($initialPrice, $discountValue): float
    {
        return $initialPrice - $initialPrice*$discountValue/100;
    }
}
