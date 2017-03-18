@component('mail::message')
# welcome to darksite
Thanx for signin up

The body of your message.

@component('mail::button', ['url' => 'http://dusk.dev/home'])
View my dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
