<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderCredentials;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class OrderCredentialsFactory extends Factory
{
    use WithFaker;
    protected $model = OrderCredentials::class;

    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone' => '+99' . $this->faker->numberBetween(1234567889, 999999999),
            'email' => $this->faker->email(),
        ];
    }
}
