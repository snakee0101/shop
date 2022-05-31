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

        //Send a confirmation email
       Mail::to( $request->email )
            ->send(new ConfirmNewsSubscriptionMail( $request->email ));

        /*NewsSubscriber::create([
            'email' => request('email')
        ]);*/

        return back();
    }

    public function destroy($email)
    {

    }
}
