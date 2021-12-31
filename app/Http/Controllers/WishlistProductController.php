<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistProductController extends Controller
{
    public function toggle(Request $request, Wishlist $wishlist, Product $product)
    {
        $wishlist->products()->toggle($product);
    }

    public function set_default(Request $request, Wishlist $wishlist)
    {
        $wishlist->update(['is_active' => true]);
    }
}
