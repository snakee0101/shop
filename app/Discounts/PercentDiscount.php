<?php

namespace App\Discounts;

class PercentDiscount implements DiscountContract
{
    public function calculatePrice($initialPrice, $discountValue)
    {
        return $initialPrice - $initialPrice*$discountValue/100;
    }
}
