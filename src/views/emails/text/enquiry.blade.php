Hello {{ Config::get('laravel-contact-form::mail.to.name') }}

We've received a new enquiry through the website, here are the details:

@foreach (Config::get('laravel-contact-form::fields') as $fieldName => $options)

	{{ trans('laravel-contact-form::copy.labels.'.$fieldName) }}    {{ $$fieldName }}

@endforeach