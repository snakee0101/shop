<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function add(Product $product, $quantity)
    {
        $unique_micro_timestamp = intval(\microtime(true) * 10000); //it is unique cart id

        if ($product->in_cart)  //item could be added to cart only once
            return;

        \Cart::add(array(
            'id' => $unique_micro_timestamp,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'attributes' => array(),
            'associatedModel' => $product
        ));

    }

    public function show()
    {
        return view('cart', [
            'items' => \Cart::getContent()->sortBy('name')
        ]);
    }

    public function update_quantity($cart_row_id)
    {
        \Cart::update($cart_row_id, [
            'quantity' => request('amount'),
        ]);
    }

    public function destroy($cart_row_id)
    {
        \Cart::remove($cart_row_id);
        return redirect()->route('cart.index');
    }
}