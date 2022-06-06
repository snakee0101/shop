<?php

namespace Tests\Feature;

use App\Models\Badge;
use App\Models\BadgeStyle;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
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

    public function test_badge_style_could_be_deleted()
    {
        Badge::factory()->create();

        $style = BadgeStyle::first();
        $this->assertDatabaseCount('badge_styles', 1);

        $this->delete( route('badge_style.destroy', $style) );
        $this->assertDatabaseCount('badge_styles', 0);
    }

    public function test_badge_style_could_be_updated()
    {
        Badge::factory()->create();

        $style = BadgeStyle::first();
        $this->put( route('badge_style.update', $style), [
            'background_color' => '#cccbbb',
            'text_color' => '#fffee1'
        ] )->assertRedirect();

        $this->assertDatabaseHas('badge_styles', [
            'background_color' => '#cccbbb',
            'text_color' => '#fffee1'
        ]);
    }

    public function test_badge_could_be_assigned_to_a_product()
    {
        $product = Product::factory()->make();

        $badge_style = BadgeStyle::factory()->create();

        $badge_data = [
            'badge_applied' => 'on',
            'badge_text' => 'test',
            'badge_style_id' => $badge_style->id
        ];

        $this->post( route('product.store'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $badge_data
        )->assertRedirect();

        $this->assertDatabaseHas('products', [
            'name' => $product->name
        ]);

        $this->assertDatabaseHas('badges', [
            'text' => $badge_data['badge_text'],
            'product_id' => Product::first()->id,
            'badge_style_id' => $badge_style->id,
        ]);
    }

    public function test_if_checkbox_is_unchecked_badge_must_not_be_created()
    {
        $product = Product::factory()->make();

        $badge_style = BadgeStyle::factory()->create();

        $badge_data = [
            'badge_applied' => 'off',
            'badge_text' => 'test',
            'badge_style_id' => $badge_style->id
        ];

        $this->post( route('product.store'),
            $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $badge_data
        )->assertRedirect();

        $this->assertDatabaseHas('products', [
            'name' => $product->name
        ]);

        $this->assertDatabaseCount('badges', 0);
    }

    public function test_if_badge_checkbox_on_product_edit_page_is_unchecked_badge_must_be_deleted()
    {
        Badge::factory()->create();

        $product = Product::first();
        $badge_style = BadgeStyle::first();

        $badge_data = [
            'badge_applied' => 'off',
            'badge_text' => 'test',
            'badge_style_id' => $badge_style->id
        ];

        $this->put( route('product.update', $product), $product->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') + ['category_id' => $product->category_id]
            + $badge_data)->assertRedirect();

        $this->assertDatabaseCount('badges', 0);
    }
}
