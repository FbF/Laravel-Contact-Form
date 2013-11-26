<?php

return array(

	'uri' => 'contact',

	'view' => 'laravel-contact-form::contact',

	'mail' => array(
		'views' => array(
			'laravel-contact-form::emails.html.enquiry',
			'laravel-contact-form::emails.text.enquiry',
		),
		'to' => array(
			'name' => 'Five by Five Webmaster',
			'email' => 'webmaster@fivebyfivedigital.com',
		),
		'subject' => 'Website Enquiry',
	),

);