<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        Vote::create(request(['object_id', 'object_type', 'value']) + [
            'user_id' => auth()->id()
        ]);

        return $request->object_type::find($request->object_id)
                       ->vote_statistics;
    }
}
