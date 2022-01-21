<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('checkout', [
            'cart_items' => \Cart::getContent(),
            'message' => ''
        ]);
    }

    public function store(OrderRequest $form)
    {
        //if 'checkout_payment_method' == 'card' then order is paid
        $is_paid = [
            'is_paid' => request('checkout_payment_method') === 'card'
        ];

        //If transaction fails - cart is not cleared
        DB::transaction(function() use ($is_paid, $form) {
            $order = Order::create(
                $form->only(['country', 'address', 'apartment', 'post_office_address', 'city', 'state', 'postcode', 'shipping_date'])
                + $is_paid
            );

            //if user is not logged in - credentials must be saved
            if(!auth()->check())
                $order->credentials()->create(
                    request(['first_name', 'last_name', 'phone', 'email'])
                );

            //Attach all objects to order
            \Cart::getContent()->each(function($item) use ($order) {
                //Gets the name of polymorphic relation that will be called
                $method = match( get_class($item->associatedModel) ) {
                    Product::class => 'products',
                    ProductSet::class => 'product_sets',
                };

                $order->$method()->attach($item->associatedModel, [
                    'quantity' => $item->quantity
                ]);
            });
        });

        //Clear a cart after processing the order
        \Cart::clear();

        return redirect()->route('checkout')->withInput([
           'message' => 'Your order is successfully placed'
        ]);
    }
}
