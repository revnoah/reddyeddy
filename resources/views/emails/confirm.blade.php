@component('mail::message')
# Confirm your account

Your account has been created but you must confirm it.

@component('mail::button', ['url' => $url])
Confirm Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
