<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\WithFaker;

class PhotoFactory extends Factory
{
    use WithFaker;
    protected $model = Photo::class;

    public function definition()
    {
        return [
            'url' => '/images/products/product-' . random_int(1,15) . '.jpg',
            'user_id' => User::factory()
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
