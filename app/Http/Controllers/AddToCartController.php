<?php

namespace App\Http\Controllers;

use App\Contracts\Purchaseable;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public $item;

    public function __construct(Purchaseable $item)
    {
        $this->item = $item;
    }

    public function add($quantity)
    {
        $unique_micro_timestamp = intval(\microtime(true) * 10000); //it is unique cart id

        if ($this->item->in_cart)  //item could be added to cart only once
            return;

        \Cart::add(array(
            'id' => $unique_micro_timestamp,
            'name' => $this->item->name,
            'price' => $this->item->price,
            'quantity' => $quantity,
            'attributes' => [],
            'associatedModel' => $this->item
        ));
    }
}
