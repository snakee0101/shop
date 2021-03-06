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

        $wishlist->touch();
    }

    public function toggle_default(Request $request, Product $product)
    {
        auth()->user()->wishlists()
                         ->firstWhere('is_active', true)
                         ->products()
                         ->toggle($product);

        return $product->fresh()->inDefaultWishlist;
    }

    public function set_default(Request $request, Wishlist $wishlist)
    {
        $wishlist->update(['is_active' => true]);

        auth()->user()->wishlists()     //inactivate other wishlists
                      ->where('id', '!=', $wishlist->id)
                      ->update(['is_active' => false]);
    }

    public function move(Request $request, Wishlist $wishlist, Product $product)
    {
        $wishlist->products()->detach( $product );

        $wishlist_2 = Wishlist::find( request('move_to') );
        $wishlist_2->products()->attach( $product );

        $wishlist->touch();
        $wishlist_2->touch();
    }
}
