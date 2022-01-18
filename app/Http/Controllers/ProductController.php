<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function description(Product $product)
    {
        $product->visit();

        return view('product.description', [
            'product' => $product,
            'product_sets' => ProductSet::whereContainsProduct($product)->get()
        ]);
    }

    public function characteristics(Product $product)
    {
        $product->visit();

        return view('product.characteristics', [
            'product' => $product,
            'product_sets' => ProductSet::whereContainsProduct($product)->get()
        ]);
    }

    public function reviews(Product $product)
    {
        $product->visit();

        return view('product.reviews', [
            'product' => $product,
            'reviews' => $product->reviews()->latest()->paginate(40),
            'product_sets' => ProductSet::whereContainsProduct($product)->get()
        ]);
    }

    public function questions(Product $product)
    {
        $product->visit();

        return view('product.questions', [
            'product' => $product,
            'questions' => $product->questions()->latest()->paginate(40),
            'product_sets' => ProductSet::whereContainsProduct($product)->get()
        ]);
    }

    public function videos(Product $product)
    {
        $product->visit();

        return view('product.videos', [
            'product' => $product,
            'product_sets' => ProductSet::whereContainsProduct($product)->get()
        ]);
    }

    public function buy_together(Product $product)
    {
        $product->visit();

        return view('product.buy_together', [
            'product' => $product,
            'product_sets' => ProductSet::whereContainsProduct($product)->get()
        ]);
    }
}
