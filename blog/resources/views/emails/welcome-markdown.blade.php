@component ('mail::message')
# Introduction

Hello there *{{$user->name}}*,

_blah blah blah blah _

* list 1
* list 2
* list 3
* list 4
* list 5

@component ('mail::button', ['url' => ''])
Button Text
@endcomponent

@component ('mail::panel', ['url' => ''])
panel yeah
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
