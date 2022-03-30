<?php

namespace App\Http\Controllers;

use App\Actions\CharacteristicDiffAction;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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

        return $product->fresh()->in_comparison;
    }

    public function show(Category $category, CharacteristicDiffAction $diff)
    {
        $products = auth()->user()
            ->comparison
            ->filter( fn($product) => $product->category_id == $category->id );

        return view('comparison.category', [
            'category' => $category,
            'products' => $products,
            'characteristic_diff' => $diff->execute($products),
        ]);
    }

    public function showPublic($access_token, Category $category, CharacteristicDiffAction $diff)
    {
        $comparison_owner = User::firstWhere('comparison_access_token', $access_token);

        $products = $comparison_owner->comparison
                                      ->filter( fn($product) => $product->category_id == $category->id );

        return view('comparison.category', compact('category', 'products') + [
            'characteristic_diff' => $diff->execute($products),
        ]);
    }

    public function destroy(Product $product)
    {
        auth()->user()->comparison()->detach($product);

        return back();
    }
}
