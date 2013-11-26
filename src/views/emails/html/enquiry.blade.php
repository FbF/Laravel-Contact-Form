<html>
	<body>
		<p>Hello {{ Config::get('laravel-contact-form::mail.to.name') }}</p>
		<p>We've received a new enquiry through the website, here are the details:</p>
		<p>Name:   {{ $name }}</p>
		<p>Email:  {{ $email }}</p>
		<p>Message:</p>
		<p>{{ nl2br($enquiry) }}</p>
	</body>
</html>