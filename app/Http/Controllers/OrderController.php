<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::all()
        ]);
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', [
            'order' => $order,
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return back();
    }

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

        $user = [
            'user_id' => auth()->id()
        ];

        //If transaction fails - cart is not cleared
        DB::transaction(function() use ($is_paid, $form, $user) {
            $order = Order::create(
                $form->only(['country', 'address', 'apartment', 'post_office_address', 'city', 'state', 'postcode', 'shipping_date'])
                + $is_paid + $user
            );

            //if user is not logged in - credentials must be saved
            if(!auth()->check())
                $order->credentials()->create(
                    request(['first_name', 'last_name', 'phone', 'email'])
                );

            //Attach all objects to order
            \Cart::getContent()->each(function($item) use ($order) {
                $item->associatedModel->orders()->attach($order, [
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

    public function update(Order $order, Request $request)
    {
        $request->validate([
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'shipping_date' => 'required|date_format:Y-m-d H:i:s'
        ]);

        $is_paid = ['is_paid' => \request('is_paid') == 'Yes'];

        $order->update( request(['status', 'country',
            'address', 'apartment', 'post_office_address', 'city',
            'state', 'postcode', 'shipping_date']) + $is_paid );

        return redirect()->back();
    }
}
