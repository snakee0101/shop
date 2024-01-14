@component('mail::message')
    # Confirm your email

    To confirm your email, click a confirmation link.

    @component('mail::button', ['url' => $url])
        Confirm email
    @endcomponent
@endcomponent
