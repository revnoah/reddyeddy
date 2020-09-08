@component('mail::message')
# You have been invited to a team

You have been invited to the team {{ $name }}.

{{ $description }}

@component('mail::button', ['url' => $url])
View Team
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
