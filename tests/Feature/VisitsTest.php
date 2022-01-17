<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class VisitsTest extends TestCase
{
    private function visit($route, $product, $user)
    {
        $this->get( route($route, $product) )->assertOk();

        $this->assertDatabaseHas('visited_products', [
            'user_id' => $user->id,
            'product_id' => $product->id
        ]);

        DB::table('visited_products')->delete();

        $this->assertDatabaseCount('visited_products', 0);
    }

    public function test_when_authenticated_user_accesses_any_product_controller_page_the_visit_is_saved()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        Wishlist::createDefault($user);

        $this->actingAs($user);

        $this->visit('product.description', $product, $user);
        $this->visit('product.characteristics', $product, $user);
        $this->visit('product.reviews', $product, $user);
        $this->visit('product.questions', $product, $user);
        $this->visit('product.videos', $product, $user);
    }
}
