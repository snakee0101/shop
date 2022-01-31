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
        if( is_null($order->credentials) )
        {
            $credentials = new class ($order->owner) {
                public $first_name, $last_name, $phone, $email;

                public function __construct(User $order_owner)
                {
                    $this->first_name = $order_owner->first_name;
                    $this->last_name = $order_owner->last_name;
                    $this->phone = $order_owner->phone;
                    $this->email = $order_owner->email;
                }
            };
        } else {
            $credentials = $order->credentials;
        }

        return view('admin.orders.edit', [
            'order' => $order,
            'credentials' => $credentials
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
