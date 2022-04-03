<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Models\Wishlist;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_product_model_contains_its_classname()
    {
        $product = Product::factory()->create();
        $this->assertEquals(Product::class, $product->object_type);

        $this->assertStringContainsString('ObjectType', $product->toJson());
    }

    public function test_product_can_determine_whether_it_is_in_a_default_wishlist()
    {
        $this->actingAs( $user = User::factory()->create() );

        $default_wishlist = Wishlist::factory()->create(['user_id' => $user]);
        Wishlist::factory()->inactive()->create(['user_id' => $user]);

        $product = Product::factory()->create();

        $this->assertFalse( $product->inDefaultWishlist );

        $default_wishlist->products()->attach($product);
        $this->assertTrue( $product->inDefaultWishlist );
    }

    public function test_product_knows_reviews_count()
    {
        Review::factory()->count(4)->create([
            'product_id' => $product = Product::factory()->create()
        ]);

        $this->assertEquals(4, $product->fresh()->reviews_count);
    }

    public function test_product_counts_average_rounded_number_of_review_stars()
    {
        [$product, $product2] = Product::factory()->count(2)->create();

        Review::factory()->createMany([
            ['product_id' => $product, 'rating' => 3],
            ['product_id' => $product, 'rating' => 4],
            ['product_id' => $product, 'rating' => 4],
            ['product_id' => $product2, 'rating' => 3],
            ['product_id' => $product2, 'rating' => 3],
            ['product_id' => $product2, 'rating' => 4]
        ]);
        $product->loadAvg('reviews', 'rating');
        $product2->loadAvg('reviews', 'rating');

        $this->assertEquals(4, round($product->reviews_avg_rating));
        $this->assertEquals(3, round($product2->reviews_avg_rating));
    }

    //product_gets_other_products_in_completed_orders_that_contain_current_product

    private function prepare_order_products()
    {
        //I need to get all products within orders, that contain product [1]
        //all duplications are removed

        $products = Product::factory()->count(9)->create();

        //these products must be returned
        $order_1 = Order::factory()->withStatus('completed')->create();
        $order_1->products()->attach([ $products[0]->id, $products[1]->id, $products[2]->id ], ['quantity' => 1]);

        //these products must be returned
        $order_2 = Order::factory()->withStatus('completed')->create();
        $order_2->products()->attach([ $products[3]->id, $products[1]->id, $products[4]->id ], ['quantity' => 1]);

        //doesn't contain product [1] - these products are not returned
        $order_3 = Order::factory()->withStatus('completed')->create();
        $order_3->products()->attach([ $products[5]->id, $products[6]->id, $products[7]->id ], ['quantity' => 1]);

        //order is not completed - it is ignored
        $order_4 = Order::factory()->withStatus('on hold')->create();
        $order_4->products()->attach([ $products[7]->id, $products[1]->id, $products[8]->id ], ['quantity' => 1]);

        return compact('products', 'order_1', 'order_2', 'order_3', 'order_4');
    }

    public function test_bought_together_products_must_be_unique()
    {
        $data = $this->prepare_order_products();
        $data['order_1']->products()->attach( $data['products'][3], ['quantity' => 1] );

        $res = $data['products'][1]->getAllBoughtTogetherProducts();
        $this->assertCount(4, $res);
    }

    public function test_only_right_products_are_returned()
    {
        $data = $this->prepare_order_products();
        $res = $data['products'][1]->getAllBoughtTogetherProducts();

        $this->assertCount(4, $res);

        $this->assertTrue( $res->contains( fn($product) => $data['products'][0]->id === $product->id) );
        $this->assertTrue( $res->contains( fn($product) => $data['products'][2]->id === $product->id) );
        $this->assertTrue( $res->contains( fn($product) => $data['products'][3]->id === $product->id) );
        $this->assertTrue( $res->contains( fn($product) => $data['products'][4]->id === $product->id) );
    }

    public function test_grouped_bought_together_products_can_be_returned()
    {
        $data = $this->prepare_order_products();
        $res = $data['products'][1]->getGroupedBoughtTogetherProducts();

        $this->assertEquals( $res[ $data['products'][2]->category_id ][0]->id, $data['products'][2]->id );
    }
}
