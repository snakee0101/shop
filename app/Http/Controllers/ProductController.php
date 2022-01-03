<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function description(Product $product)
    {
        return view('product.description', [
            'product' => $product
        ]);
    }

    public function characteristics(Product $product)
    {
        return view('product.characteristics', [
            'product' => $product
        ]);
    }

    public function reviews(Product $product)
    {
        return view('product.reviews', [
            'product' => $product
        ]);
    }

    public function questions(Product $product)
    {
        return view('product.questions', [
            'product' => $product
        ]);
    }

    public function videos(Product $product)
    {
        return view('product.videos', [
            'product' => $product
        ]);
    }

    public function buy_together(Product $product)
    {
        return view('product.buy_together', [
            'product' => $product
        ]);
    }
}
