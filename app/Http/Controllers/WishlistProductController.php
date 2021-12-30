<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistProductController extends Controller
{
    public function destroy(Request $request, Wishlist $wishlist, Product $product)
    {
        $wishlist->products()->detach($product);
    }
}
