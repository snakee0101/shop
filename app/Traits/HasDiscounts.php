<?php

namespace App\Traits;

use App\Models\Discount;

trait HasDiscounts {
    public function discount()
    {
        return $this->morphOne(Discount::class, 'item');
    }

    /**
     * Price is calculated based on total price without discount if discount is present.
     * If discount is not present - allow to apply individual product discounts
     * */
    public function getPriceWithDiscountAttribute()
    {
        return $this->discount()->first()?->apply() ?? $this->price;
    }
}
