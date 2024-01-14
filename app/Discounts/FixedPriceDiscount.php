<?php

namespace App\Discounts;

class FixedPriceDiscount implements DiscountContract
{
    public function calculatePrice($initialPrice, $discountValue)
    {
        return $initialPrice - $discountValue;
    }
}
