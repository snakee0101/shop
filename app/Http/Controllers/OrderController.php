<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('checkout', [
            'cart_items' => \Cart::getContent()
        ]);
    }

    public function store(OrderRequest $form)
    {
        return 123;
    }
}
