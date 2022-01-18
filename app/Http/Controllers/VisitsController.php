<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    public function show()
    {
        return view('account', [
            'visited_products' => auth()->user()->visited_products()
                                                ->orderByDesc('pivot_created_at')->get()
        ]);
    }

    public function destroy(Product $product)
    {
        auth()->user()->visited_products()->detach($product);

        return back();
    }
}
