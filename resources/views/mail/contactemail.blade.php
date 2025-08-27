@component('mail::message')
# New Contact Notification

A visitor reached out to you.

**Name:** {{ $name }}
**Subject:** {{ $subject }}
**Email:** {{ $email }}
**Message:** {{ $message }}


Thanks,
{{ config('app.name') }}
@endcomponent