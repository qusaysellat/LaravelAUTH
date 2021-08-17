@component('mail::message')
# Welcome to my Authentication and Mailing App

Thank you very much.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
