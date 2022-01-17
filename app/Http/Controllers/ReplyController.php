<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Notifications\ReplyNotification;
use Illuminate\Http\Request;

class ReplyController extends Controller
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
            'text' => 'required'
        ]);

        $reply = Reply::create([
            'user_id' => auth()->id(),
            'text' => nl2br( request('text') ),
            'object_id' => request('object_id'),
            'object_type' => request('object_type')
        ]);

        $object = request('object_type')::find( request('object_id') );

        if($object->notify_on_reply)
            $object->author->notify( new ReplyNotification($object) );

        return back();
    }

    public function show(Reply $reply)
    {
        //
    }

    public function edit(Reply $reply)
    {
        //
    }

    public function update(Request $request, Reply $reply)
    {
        //
    }

    public function destroy(Reply $reply)
    {
        //
    }
}
