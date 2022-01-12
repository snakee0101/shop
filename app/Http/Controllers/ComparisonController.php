<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function store(Product $product)
    {
        auth()->user()->comparison()->attach($product);
    }

    public function destroy(Product $product)
    {
        auth()->user()->comparison()->detach($product);
    }
}
