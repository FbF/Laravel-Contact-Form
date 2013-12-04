<html>
	<body>
		<p>Hello {{ Config::get('laravel-contact-form::mail.to.name') }}</p>
		<p>We've received a new enquiry through the website, here are the details:</p>
		@foreach (Config::get('laravel-contact-form::fields') as $fieldName => $options)
			<p>{{ trans('laravel-contact-form::copy.labels.'.$fieldName) }}    {{ nl2br($$fieldName) }}</p>
		@endforeach
	</body>
</html>