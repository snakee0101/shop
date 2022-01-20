<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class OrderFactory extends Factory
{
    use WithFaker;
    protected $model = Order::class;

    public function definition()
    {
        return [
            'is_paid' => false,
            'country' => $this->faker->country(),
            'address' => $this->faker->streetAddress(),
            'apartment' => $this->faker->randomNumber(2),
            'post_office_address' => null,
            'city' => $this->faker->city(),
            'state' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'shipping_date' => $this->faker->dateTimeBetween('-1 month'),
        ];
    }

    public function withPostOfficeAddress()
    {
        return $this->state(function (array $attributes) {
            return [
                'address' => null,
                'apartment' => null,
                'post_office_address' => $this->faker->streetAddress(),
            ];
        });
    }
}
