Laravel Contact Form
====================

A Laravel 4 package for adding a simple contact form to a website

## Features

* Partial for a contact form, that you can include in your own views
* Form fields are name, email and message
* Controller action to handle the submission of the forms, which can handle normal (redirects to previous page), or AJAX requests (responds with JSON with status code and message)
* Translation approach for customising labels, buttons, feedback messages and validation errors
* Enquiry is emailed to a single configurable email address
* Twitter bootstrap compatible markup and class names for the forms

## Installation

Add the following to you composer.json file

    "fbf/laravel-contact-form": "dev-master"

Run

    composer update

Add the following to app/config/app.php

    'Fbf\LaravelContactForm\LaravelContactFormServiceProvider'

Publish the config

    php artisan config:publish fbf/laravel-contact-form

## Configuration

The URI of contact page

	'uri' => 'contact',

The view of the contact page (you can set this to be a view in your app, which has much more contact on it for example, then include the partial for the form, e.g. `@include('laravel-contact-form::form')`)

	'view' => 'laravel-contact-form::contact',

The mail configuration options speak for themselves...

	'mail' => array(
		'views' => array(
			'laravel-contact-form::emails.html.enquiry',
			'laravel-contact-form::emails.text.enquiry',
		),
		'to' => array(
			'name' => 'Customer Services Manager',
			'email' => 'customer.services@company.com',
		),
		'subject' => 'Website Enquiry',
	),

## Usage

Customise the options in the config file and then add the following to the view file that you specified in the config to render the contact form inside it.

    @include('laravel-contact-form::form')