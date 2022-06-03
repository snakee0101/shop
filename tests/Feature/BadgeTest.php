<?php

namespace Tests\Feature;

use App\Models\Badge;
use App\Models\BadgeStyle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BadgeTest extends TestCase
{
    public function test_example()
    {
        dd(
            Badge::factory()->make()
        );
    }
}
