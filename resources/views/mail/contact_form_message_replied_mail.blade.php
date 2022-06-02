@component('mail::message')
    # Admin replied your message

    Your message: {!! $contact_form_message->message !!}

    Admin reply: {!! $text !!}
@endcomponent
