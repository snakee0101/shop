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

    public function delete_product_set(Order $order, ProductSet $product_set)
    {
        $order->product_sets()->detach($product_set);

        return redirect()->back();
    }
}
