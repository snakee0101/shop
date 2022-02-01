<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Http\Request;

class AdminOrderActionsController extends Controller
{
    public function delete_product(Order $order, Product $product)
    {
        $order->products()->detach($product);

        return redirect()->back();
    }

    public function change_product_quantity(Order $order, Product $product)
    {
        $order->products()->sync([
            $product->id => ['quantity' => request('quantity')]
        ]);

        return redirect()->back();
    }

    public function change_product_set_quantity(Order $order, ProductSet $product_set)
    {
        $order->product_sets()->sync([
            $product_set->id => ['quantity' => request('quantity')]
        ]);

        return redirect()->back();
    }

    public function delete_product_set(Order $order, ProductSet $product_set)
    {
        $order->product_sets()->detach($product_set);

        return redirect()->back();
    }
}
