<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMessageRepliedMail;
use App\Models\ContactFormMessage;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contacts.index', [
            'contacts' => ContactFormMessage::paginate()
        ]);
    }

    public function edit(ContactFormMessage $contact_form_message)
    {
        $contact_form_message->update([ 'is_read' => true ]);

        return view('admin.contacts.show', [
            'message' => $contact_form_message
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

    public function store_reply(Request $request, ContactFormMessage $contact_form_message)
    {
        $text = nl2br($request->text);

        $contact_form_message->reply()->create([
            'user_id' => auth()->id(),
            'text' => $text,
        ]);

        $contact_form_message->update([ 'is_replied' => true ]);

        Mail::to($contact_form_message->email)
            ->send(new ContactFormMessageRepliedMail($contact_form_message, $text));

        return back();
    }

    public function destroy(ContactFormMessage $contact_form_message)
    {
        $contact_form_message->delete();

        return redirect()->route('admin.contacts.index');
    }

}
