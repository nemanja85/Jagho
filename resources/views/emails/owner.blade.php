@component('mail::message')
@if($message['owner'] == 1)
@if($message['lang'] == 'sr')
# Aplikant
 {{$message['user']}}<br>
E-mail: {{$message['email']}}<br>
Telefon: {{$message['phone']}}
# Poruka
{{$message['msg']}}
@else
# Applicant
{{$message['user']}}<br>
E-mail: {{$message['email']}}<br>
Phone: {{$message['phone']}}
# Message
 {{$message['msg']}}
@endif

@component('mail::button', ['url' => 'http://jakho.rs'])

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
@endif
@if($message['owner'] == 2)
@if($message['lang'] == 'sr')
# Poruka
{{$message['msg']}}
@else
# Message
{{$message['msg']}}
@endif
@component('mail::button', ['url' => 'http://jakho.rs'])
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

@endif
@endcomponent
