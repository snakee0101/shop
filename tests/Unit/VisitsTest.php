<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class VisitsTest extends TestCase
{
    public function test_user_contains_visited_products()
    {
       $user = User::factory()->create();

       DB::table('visited_products')->insert([
           'user_id' => $user->id,
           'product_id' => Product::factory()->create()->id
       ]);

       $this->assertInstanceOf(Product::class, $user->visited_products[0]);
    }

    public function test_a_product_records_visits()
    {
        $this->actingAs($user = User::factory()->create());
        Product::factory()->create()
                          ->visit();

        $this->assertNotEmpty($user->fresh()->visited_products);
    }

    public function test_duplicated_visit_doesnt_raise_an_exception()
    {
        $this->actingAs($user = User::factory()->create());

        $product = Product::factory()->create();
        $product->visit();
        $product->visit();

        $this->assertCount(1, $user->fresh()->visited_products);
    }

    public function test_visit_from_not_logged_in_user_doesnt_raise_an_exception()
    {
        $product = Product::factory()->create();
        $product->visit();

        $this->assertTrue(true);  //this test just checks that no exceptions happened
    }

    public function test_product_visits_are_recorded_with_timestamp()
    {
        $this->actingAs( $user = User::factory()->create() );

        Product::factory()->create()->visit();

        $this->assertNotNull( $user->fresh()->visited_products[0]->pivot->created_at );
    }
}
