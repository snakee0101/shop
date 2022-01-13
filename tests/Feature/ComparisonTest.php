<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ComparisonTest extends TestCase
{
    public function test_current_user_can_add_products_to_comparison()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $this->actingAs($user);

        $this->post( route('comparison.store', $product) );

        $this->assertDatabaseHas('comparison', [
            'user_id' => $user->id,
            'product_id' => $product->id
        ]);
    }

    public function test_current_user_can_remove_products_from_comparison()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        DB::table('comparison')->insert([
            'product_id' => $product->id,
            'user_id' => $user->id
        ]);

        $this->actingAs($user);

        $this->assertDatabaseCount('comparison',1);

        $this->delete( route('comparison.destroy', $product) );
        $this->assertDatabaseCount('comparison',0);
    }

    public function test_unregistered_user_can_access_comparison_with_comparison_access_token()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        DB::table('comparison')->insert([
            'product_id' => $product->id,
            'user_id' => $user->id
        ]);

        $this->assertDatabaseCount('comparison',1);

        $category_name = Category::find($product->category_id)->name;

        $this->get( route('comparison.showPublic', [$user->comparison_access_token, $product->category_id]) )
             ->assertOk()
             ->assertSee("Comparing $category_name");
    }
}
