<?php

namespace App\Http\Controllers;

use App\Contracts\Purchaseable;

class AddToCartController extends Controller
{
    public function __construct(private Purchaseable $item) { }  //The Purchaseable interface is resolved in AppServiceProvider

    public function add($quantity)
    {
        if ($this->item->in_cart)  //item could be added to cart only once
            return;

        \Cart::add(array(
            'id' => uniqid(),
            'name' => $this->item->name,
            'price' => $this->item->priceWithDiscount,
            'quantity' => $quantity,
            'attributes' => [],
            'associatedModel' => $this->item
        ));
    }
}
