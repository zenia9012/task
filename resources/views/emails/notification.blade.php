@component('mail::message')
# Introduction

Notification .... for registering

@component('mail::button', ['url' => 'http://example.com'])
Say Yes
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
