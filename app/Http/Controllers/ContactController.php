<?php

namespace App\Http\Controllers;

use App\Models\ContactFormMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contacts.index', [
            'contacts' => ContactFormMessage::paginate()
        ]);
    }

    public function show()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:20'
        ]);

        ContactFormMessage::create( $validated );

        return back()->with('success', 'Your message was successfully sent');
    }
}
