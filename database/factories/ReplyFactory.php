<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\WithFaker;

class ReplyFactory extends Factory
{
    use WithFaker;

    protected $model = Reply::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'text' => $this->faker->sentence
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
}
