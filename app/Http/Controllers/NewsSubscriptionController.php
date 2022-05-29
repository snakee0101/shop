<?php

namespace App\Http\Controllers;

use App\Models\NewsSubscriber;
use Illuminate\Http\Request;

class NewsSubscriptionController extends Controller
{
    public function store($email)
    {
        NewsSubscriber::create( compact('email') );
    }

    public function destroy($email)
    {

    }
}
