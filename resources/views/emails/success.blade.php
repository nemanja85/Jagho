@component('mail::message')

@if($message['lang'] == 'sr')
# Poruka
{{$message['message']}}
@else
# Message
{{$message['message']}}
@endif

@component('mail::button', ['url' => 'http://srv.jakho.rs'])

@if($message['lang'] == 'sr')
Posetite Nas
@else
Visit us
@endif
@endcomponent


@if($message['lang'] == 'sr')
Hvala,<br>
{{ config('app.name') }}
@else
Thanks,<br>
{{ config('app.name') }}
@endif

@endcomponent
