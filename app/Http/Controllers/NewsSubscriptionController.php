<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmNewsSubscriptionMail;
use App\Models\NewsSubscriber;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class NewsSubscriptionController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:news_subscribers,email'
        ], [
            'email.required' => 'Email is required',
            'email.unique' => 'User with this email is already subscribed',
            'email.email' => 'Please enter a valid email',
        ]);

        Mail::to($request->email)
            ->send(new ConfirmNewsSubscriptionMail($request->email));

        return redirect()->back()->with('confirmation_message', 'Check your inbox for confirmation message');
    }

    public function store(Request $request, $email)
    {
        if ($request->hasValidSignature())
            NewsSubscriber::create([
                'email' => $email
            ]);

        return redirect('/')->with('confirmation_message', 'Your newsletter subscription has been confirmed');
    }

    public function destroy($email)
    {
        NewsSubscriber::where('email', $email)
                      ->delete();

        //TODO: Check for valid signature

        return redirect('/')->with('confirmation_message', 'You have unsubscribed from newsletter');
    }
}
