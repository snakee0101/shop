<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class BadgeStyleFactory extends Factory
{
    use WithFaker;

    public function definition()
    {
        $bg_colors = ['#6610f2', '#212529', '#dc3545', '#198754', '#0d6efd'];
        $bg_color = $bg_colors[ array_rand($bg_colors) ];

        return [
            'text_color' => '#fff',
            'background_color' => $bg_color
        ];
    }
}
