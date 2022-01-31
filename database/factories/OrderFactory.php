<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
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
            'status' => $this->faker->randomElement(['on hold', 'processing', 'cancelled', 'sent', 'completed']),
            'state' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'shipping_date' => $this->faker->dateTimeBetween('-1 month'),
        ];
    }

    public function withStatus($status)
    {
        return $this->state(function (array $attributes) use ($status) {
            return [
                'status' => $status,
            ];
        });
    }

    public function withUser(User $user)
    {
        return $this->state(function (array $attributes) use ($user) {
            return [
                'user_id' => $user,
            ];
        });
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
