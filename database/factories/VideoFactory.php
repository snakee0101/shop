<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class VideoFactory extends Factory
{
    protected $model = Video::class;

    public function definition()
    {
        return [
            'url' => $this->faker->url,
            'title' => $this->faker->sentence
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
