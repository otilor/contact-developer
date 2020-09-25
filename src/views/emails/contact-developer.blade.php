@component('mail::message')
# New message

{{ $name }} has a message for you
<hr>
<q>{{ $message }}</q>
{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
