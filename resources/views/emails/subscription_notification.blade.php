

@component('mail::message')
# New Subscription Notification

A new subscription has been received with the following details:

- **Name:** {{ $subscription->name }}
- **Email:** {{ $subscription->email }}

@endcomponent
