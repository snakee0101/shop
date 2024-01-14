<?php

namespace App\Http\Controllers;

use App\Contracts\Purchaseable;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
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
