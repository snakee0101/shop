<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminOrderActionsController extends Controller
{
    public function delete_product(Order $order, Product $product)
    {
        $order->products()->delete($product);

        return redirect()->back();
    }
}
