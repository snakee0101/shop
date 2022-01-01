<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WishlistController extends Controller
{
    public function index()
    {
        return view('wishlist', [
            'wishlists' => auth()->user()->wishlists
        ]);
    }

    public function store(Request $request)
    {
        if($request->default)
            auth()->user()->wishlists()->update(['is_active' => false]);

        auth()->user()->wishlists()->create([
            'name' => $request->name,
            'access_token' => Str::uuid(),
            'is_active' => (bool)$request->default
        ]);
    }

    public function update(Request $request, Wishlist $wishlist)
    {
        $wishlist->update( ['name' => $request->name] );
    }

    public function destroy(Wishlist $wishlist)
    {
        if($wishlist->is_active)
            Wishlist::firstWhere([
                ['id', '!=', $wishlist->id],
                ['user_id', auth()->id()]
            ])->update(['is_active' => true]);

        $wishlist->delete();
    }
}
