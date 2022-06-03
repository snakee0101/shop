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

    public function test_when_badge_style_is_deleted_all_associated_badges_are_automatically_removed()
    {
        Badge::factory()->create();
        BadgeStyle::first()->delete();

        $this->assertDatabaseCount('badges', 0);
    }

    public function test_when_product_is_deleted_associated_badge_is_automatically_removed()
    {
        Badge::factory()->create();
        $p = Product::first();
        $p->forceDelete();

        $this->assertDatabaseCount('badges', 0);
    }

    public function test_a_badge_style_could_be_created()
    {
        $this->post( route('badge_style.store'), [
            'background_color' => '#fff',
            'text_color' => '#000'
        ] )->assertRedirect();

        $this->assertDatabaseHas('badge_styles', [
            'background_color' => '#fff',
            'text_color' => '#000'
        ]);
    }
}
