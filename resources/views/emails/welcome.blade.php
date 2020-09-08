@component('mail::message')
# Welcome

Welcome to DocumentaryTools, a website to help you plan your documentary. Create projects, treatments, interviewees and more.

Your account has been created but you must confirm it.

@component('mail::button', ['url' => $url])
Confirm Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
