<?php

namespace Tests\Feature;

use App\Models\Badge;
use App\Models\BadgeStyle;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BadgeTest extends TestCase
{
    public function test_product_has_a_badge()
    {
        Badge::factory()->create();

        $this->assertInstanceOf(Badge::class, Product::first()->badge);
    }

    public function test_badge_has_a_style()
    {
        Badge::factory()->create();

        $this->assertInstanceOf(BadgeStyle::class, Product::first()->badge->style);
    }
}
