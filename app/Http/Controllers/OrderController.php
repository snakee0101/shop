<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
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
        //if 'checkout_payment_method' == 'card' then order is paid
        $is_paid = [
            'is_paid' => request('checkout_payment_method') === 'card'
        ];

        $order = Order::create(
            $form->only(['country', 'address', 'apartment', 'post_office_address', 'city', 'state', 'postcode', 'shipping_date'])
            + $is_paid
        );

        if(!auth()->check())  //if user is not logged in - credentials must be saved
            $order->credentials()->create(
                request(['first_name', 'last_name', 'phone', 'email'])
            );
    }
}
