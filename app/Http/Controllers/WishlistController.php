<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return view('wishlist', [
            'wishlists' => auth()->user()->wishlists
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show(Wishlist $wishlist)
    {
        //
    }

    public function edit(Wishlist $wishlist)
    {
        //
    }

    public function update(Request $request, Wishlist $wishlist)
    {

    }

    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
