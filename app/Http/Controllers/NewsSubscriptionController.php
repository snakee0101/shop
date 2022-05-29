<?php

namespace App\Http\Controllers;

use App\Models\NewsSubscriber;
use Illuminate\Http\Request;

class NewsSubscriptionController extends Controller
{
    public function store()
    {
        NewsSubscriber::create([
            'email' => request('email')
        ]);

        return back();
    }

    public function destroy($email)
    {

    }
}
