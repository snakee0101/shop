<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Discount;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'price' => 'numeric',
            'payment_info' => 'required',
            'guarantee_info' => 'required',
            'category_id' => 'exists:categories,id',
            'in_stock' => "in:" . Product::STATUS_IN_STOCK . ',' . Product::STATUS_ENDS . ',' . Product::STATUS_OUT_OF_STOCK
        ]);

        //Save basic data
        $product = Product::create(
            $request->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') +
            ['category_id' => $request->category_id]
        );

        //Apply discount
        if ($request->discount_applied === 'on')
            Discount::attachTo($product, $request);

        //save videos
        foreach ($request->whereKeyContains('video') as $encoded_video) {
            $video_object = json_decode($encoded_video);
            $product->videos()->create((array)$video_object);
        }

        //Decode and save images
        foreach($request->whereKeyContains('image') as $encoded_image)
            Photo::store($encoded_image, $product);


        //Attach characteristics
        foreach($request->whereKeyContains('char-') as $char_name => $char_value)
            Characteristic::attachTo($product, $char_name, $char_value);

        session()->flash('message', 'Product was successfully created');
        return back();
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
