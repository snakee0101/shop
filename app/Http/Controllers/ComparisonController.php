<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function index()
    {
        /**
         * Group product count by category.
         * Output: [
         *   category_id => number of products
         * ]
        */

        return view('comparison.index', [
            'comparison' => auth()->user()->comparison
                                          ->countBy( fn($product) => $product->category_id )
        ]);
    }

    public function store(Product $product)
    {
        auth()->user()->comparison()->attach($product);
    }

    public function show(Category $category)
    {
        return view('comparison.category', [
            'category' => $category,
            'products' => auth()->user()->comparison->filter( fn($product) => $product->category_id == $category->id )
        ]);
    }

    public function destroy(Product $product)
    {
        auth()->user()->comparison()->detach($product);
    }
}
