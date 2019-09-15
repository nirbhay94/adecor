@component('mail::message')
# Hello,

{{__('New contact wants to get in touch.')}}

{{ __('Name - ').$contact['name'] }}

{{ __('Email - ').$contact['email'] }}

{{ __('Subject - ').$contact['subject'] }}

{{ __('Message - ').$contact['message'] }}

Thanks,<br>

{{ config('app.name') }}
@endcomponent