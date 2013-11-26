Hello {{ Config::get('laravel-contact-form::mail.to.name') }}

We've received a new enquiry through the website, here are the details:

Name:   {{ $name }}

Email:  {{ $email }}

Message:

{{ $enquiry }}