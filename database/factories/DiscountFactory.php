<?php

namespace Database\Factories;

use App\Discounts\FixedPriceDiscount;
use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\WithFaker;

class DiscountFactory extends Factory
{
    use WithFaker;
    protected $model = Discount::class;

    public function definition()
    {
        return [
            'discount_classname' => FixedPriceDiscount::class,
            'value' => random_int(10, 40),
        ];
    }

    public function withObject(Model $object)
    {
        return $this->state(function (array $attributes) use ($object) {
            return [
                'item_id' => $object->id,
                'item_type' => $object::class,
            ];
        });
    }

    public function withExpirationDate(Carbon $since_date, Carbon $until_date)
    {
        return $this->state(function (array $attributes) use ($since_date, $until_date) {
            return [
                'active_since' => $since_date,
                'active_until' => $until_date,
            ];
        });
    }

    public function withPromocode($code)
    {
        return $this->state(function (array $attributes) use ($code) {
            return [
                'promocode' => $code,
            ];
        });
    }
}
