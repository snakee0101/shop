<?php

namespace App\Discounts;

interface DiscountContract
{
    /*
     * Returns item price after discount is applied
     * */
    public static function calculatePrice($initialPrice, $discountValue) :float;
}
