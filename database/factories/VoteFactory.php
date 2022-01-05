<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class VoteFactory extends Factory
{
    use WithFaker;

    protected $model = Vote::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'value' => $this->faker->randomElement([-1, +1])
        ];
    }

    public function withObject($object)
    {
        return $this->state(function () use ($object) {
            return [
                'object_id' => $object->id,
                'object_type' => $object::class
            ];
        });
    }
}
