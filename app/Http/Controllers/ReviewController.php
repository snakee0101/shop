<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'advantages' => 'required_with:disadvantages',
            'disadvantages' => 'required_with:advantages',
        ]);

        $review = Review::create([
            'user_id' => auth()->id(),
            'product_id' => request('product_id'),
            'rating' => request('rating'),
            'comment' => request('comment'),
            'advantages' => request('advantages'),
            'disadvantages' => request('disadvantages'),
            'notify_on_reply' => request()->has('notify_on_reply'),
        ]);

        //Decode and save images
        foreach($request->all() as $key => $encoded_image) {
            if(str_contains($key, 'image')) { //filter through image fields only
                $unique_name = now()->timestamp . Str::uuid() . '.jpg';
                Storage::put( '/images/' . $unique_name, base64_decode($encoded_image) );

                $review->photos()->create([
                    'url' => Storage::url('/images/' . $unique_name)
                ]);
            }
        }

        return back();
    }

    public function show(Review $review)
    {
        return view('product.specific_review', [
            'review' => $review,
            'product' => Product::find($review->product_id)
        ]);
    }

    public function edit(Review $review)
    {
        //
    }

    public function update(Request $request, Review $review)
    {
        //
    }

    public function destroy(Review $review)
    {
        //
    }
}
