<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'advantages' => 'required_with:disadvantages',
            'disadvantages' => 'required_with:advantages',
        ]);

        $review = auth()->user()->reviews()->create([
            'notify_on_reply' => request()->has('notify_on_reply'),
        ] + request(['product_id', 'rating', 'comment', 'advantages', 'disadvantages']));

        //Decode and save images
        foreach($request->whereKeyContains('image') as $encoded_image) {
            Photo::store($encoded_image, $review);
        }

        //save videos
        foreach($request->whereKeyContains('video') as $video_url)
            $review->videos()->create( [
                'url' => $video_url,
                'user_id' => auth()->id()
            ] );

        return back();
    }

    public function show(Review $review)
    {
        return view('product.specific_review', [
            'review' => $review,
        ]);
    }
}
