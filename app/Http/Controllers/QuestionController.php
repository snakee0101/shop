<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Product;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $question = Question::create([
            'user_id' => auth()->id(),
            'product_id' => request('product_id'),
            'comment' => request('comment'),
            'notify_on_reply' => request()->has('notify_on_reply'),
        ]);

        //Decode and save images
        foreach($request->all() as $key => $encoded_image) {
            if(str_contains($key, 'image'))  //filter through image fields only
                Photo::store($encoded_image, $question);
        }

        //save videos
        foreach($request->all() as $key => $video_url) {
            if(str_contains($key, 'video')) { //filter through video fields only
                $question->videos()->create([
                    'url' => $video_url
                ]);
            }
        }

        return back();
    }

    public function show(Question $question)
    {
        return view('product.specific_question', [
            'question' => $question,
            'product' => Product::find($question->product_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
