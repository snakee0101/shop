<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Badge;
use App\Models\BadgeStyle;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Discount;
use App\Models\Photo;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all(),
            'badge_styles' => BadgeStyle::all()
        ]);
    }

    public function store(ProductRequest $request)
    {
        //Save basic data
        $product = Product::create( $request->validated() );

        //Apply discount
        if ( $request->boolean('discount_applied') )
            Discount::attachTo($product, $request);

        //save videos
        foreach ($request->whereKeyContains('video') as $encoded_video) {
            $video_object = json_decode($encoded_video);
            $video_object->user_id = auth()->id();

            $product->videos()->create((array)$video_object);
        }

        //Decode and save images
        foreach($request->whereKeyContains('image') as $encoded_image)
            Photo::store($encoded_image, $product);


        //Attach characteristics
        foreach($request->whereKeyContains('char-') as $char_name => $char_value)
            Characteristic::attachTo($product, $char_name, $char_value);

        //Apply badges
        if ( $request->boolean('badge_applied') )
            $product->badge()->create([
                'text' => $request->badge_text,
                'badge_style_id' => $request->badge_style_id,
            ]);

        session()->flash('message', 'Product was successfully created');
        return back();
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        //Update basic data
        $product->update( $request->validated() );

        //Apply discount
        $product->discount()->delete(); //delete old discount

        if ( $request->boolean('discount_applied') )
            Discount::attachTo($product, $request);

        //Attach characteristics
        $product->characteristics()->detach(); //delete all old characteristics

        foreach($request->whereKeyContains('char-') as $char_name => $char_value)
            Characteristic::attachTo($product, $char_name, $char_value);

        //save videos
        $product->videos()->delete(); //delete all old videos

        foreach ($request->whereKeyContains('video') as $encoded_video) {
            $video_object = json_decode($encoded_video);
            $video_object->user_id = auth()->id();

            $product->videos()->create((array)$video_object);
        }

        //Decode and save images
        $product->photos->each->delete(); //Delete all old images

        foreach($request->whereKeyContains('image') as $encoded_image)
            Photo::store($encoded_image, $product);

        return back();
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
