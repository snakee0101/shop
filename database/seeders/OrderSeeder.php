<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        //select 30 random products (they must be duplicated among orders)
        $products = Product::inRandomOrder()->limit(30)->get();

        //15 orders of 5 products in each (7 of them are completed)
        $completed_orders = Order::factory()->count(7)->withStatus('completed')->create();
        $incompleted_orders = Order::factory()->count(8)->create();

        //add products
        $completed_orders->each(function($order) use ($products) {
            $order->products()->attach( $products->random(5), [
                'quantity' => random_int(1, 5)
            ] );
        });

        $incompleted_orders->each(function($order) use ($products) {
            $order->products()->attach( $products->random(5), [
                'quantity' => random_int(1, 5)
            ] );
        });
    }
}
