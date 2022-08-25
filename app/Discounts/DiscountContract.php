<?php

namespace App\Discounts;

interface DiscountContract
{
    /*
     * Returns item price after discount is applied
     * */
    public function calculatePrice($initialPrice, $discountValue);
}
