<?php

namespace App\Http\Controllers;

use App\Models\ContactFormMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        ContactFormMessage::create( $request->only(['name', 'email', 'subject', 'message']) );

        return back()->with('success', 'Your message was successfully sent');
    }
}
