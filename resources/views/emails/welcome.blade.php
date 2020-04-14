@component('mail::message')
    Hello {{ $user->name }}
    Thank you for create an account. Please verify your email using this link
    @component('mail::button', ['url' => route('verify', $user->verification_token)])
        verify Account
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
