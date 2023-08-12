@component('mail::message')
# Welcome to CentreApp!

Hi {{ $user->name }},

Thank you for joining us. We are excited to have you with us!

Please verify your email address by clicking the button below:

@component('mail::button', ['url' => $url, 'color' => 'blue'])
    Verify Email
@endcomponent
@endcomponent
