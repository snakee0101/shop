<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

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

        Review::create([
            'user_id' => auth()->id(),
            'product_id' => request('product_id'),
            'rating' => request('rating'),
            'comment' => request('comment'),
            'advantages' => request('advantages'),
            'disadvantages' => request('disadvantages'),
            'notify_on_reply' => request()->has('notify_on_reply'),
        ]);

        return back();
    }

    public function show(Review $review)
    {
        //
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
