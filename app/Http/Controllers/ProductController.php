<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function get_product_sets($product)
    {
        return ProductSet::whereHas('products', function ($query) use ($product) {
            $query->where('products.id', $product->id);
        })->get();
    }

    public function description(Product $product)
    {
        return view('product.description', [
            'product' => $product,
            'product_sets' => $this->get_product_sets($product)
        ]);
    }

    public function characteristics(Product $product)
    {
        return view('product.characteristics', [
            'product' => $product,
            'product_sets' => $this->get_product_sets($product)
        ]);
    }

    public function reviews(Product $product)
    {
        return view('product.reviews', [
            'product' => $product,
            'reviews' => $product->reviews()->latest()->paginate(40),
            'product_sets' => $this->get_product_sets($product)
        ]);
    }

    public function questions(Product $product)
    {
        return view('product.questions', [
            'product' => $product,
            'questions' => $product->questions()->latest()->paginate(40),
            'product_sets' => $this->get_product_sets($product)
        ]);
    }

    public function videos(Product $product)
    {
        return view('product.videos', [
            'product' => $product,
            'product_sets' => $this->get_product_sets($product)
        ]);
    }

    public function buy_together(Product $product)
    {
        return view('product.buy_together', [
            'product' => $product,
            'product_sets' => $this->get_product_sets($product)
        ]);
    }
}
