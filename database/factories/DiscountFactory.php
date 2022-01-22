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
            'type' => FixedPriceDiscount::class,
            'value' => random_int(-40, -1),
        ];
    }

    public function withObject(Model $object)
    {
        return $this->state(function (array $attributes) use ($object) {
            return [
                'object_id' => $object->id,
                'object_type' => $object::class,
            ];
        });
    }

    public function withExpirationDate(Carbon $date)
    {
        return $this->state(function (array $attributes) use ($date) {
            return [
                'active_until' => $date,
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
