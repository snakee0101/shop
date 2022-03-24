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
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $question = auth()->user()->questions()->create(
            request(['product_id', 'comment']) + ['notify_on_reply' => request()->has('notify_on_reply')]
        );

        //Decode and save images
        foreach($request->whereKeyContains('image') as $encoded_image)
            Photo::store($encoded_image, $question);

        //save videos
        foreach($request->whereKeyContains('video') as $video_url)
            $question->videos()->create( ['url' => $video_url] );

        return back();
    }

    public function show(Question $question)
    {
        return view('product.specific_question', [
            'question' => $question,
        ]);
    }
}
