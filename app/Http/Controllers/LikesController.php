<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function __invoke(Request $request)
    {
        News::findOrFail($request->news_id)
            ->liked_users()
            ->toggle( auth()->user() );
    }
}
