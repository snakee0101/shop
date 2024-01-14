<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\WithFaker;

class ReportFactory extends Factory
{
    use WithFaker;

    protected $model = Report::class;

    public function definition()
    {
        return [
            'cause' => $this->faker->sentence,
            'comment' => $this->faker->sentence,
            'user_id' => User::factory(),
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
