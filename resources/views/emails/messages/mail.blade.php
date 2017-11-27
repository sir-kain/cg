@component('mail::message')
# Introduction

The body of your message.
{{$nom}}

@component('mail::button', ['url' => ''])
ok
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
