<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function description(Product $product)
    {
        return view('product.description');
    }

    public function characteristics(Product $product)
    {
        return view('product.characteristics');
    }

    public function reviews(Product $product)
    {
        return view('product.reviews');
    }

    public function questions(Product $product)
    {
        return view('product.questions');
    }

    public function videos(Product $product)
    {
        return view('product.videos');
    }

    public function buy_together(Product $product)
    {
        return view('product.buy_together');
    }
}
