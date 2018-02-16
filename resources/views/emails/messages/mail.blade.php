@component('mail::message')
# Introduction

The body of your message.<br>
{{$nom}}

@component('mail::button', ['url' => ''])
ok
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
