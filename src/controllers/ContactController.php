<?php namespace Fbf\LaravelContactForm;

class ContactController extends \BaseController {

	public function form()
	{
		return \View::make(\Config::get('laravel-contact-form::view'));
	}

	public function send()
	{
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'enquiry' => 'required',
		);

		$validator = \Validator::make(\Input::all(), $rules, \Lang::get('laravel-contact-form::copy.validation'));

		if ($validator->fails())
		{
			if (\Request::ajax())
			{
				$messages = $validator->messages();
				return \Response::JSON(array('messages' => $messages), 400);
			}
			return \Redirect::to(\Input::get('from'))->withInput()->withErrors($validator);
		}

		\Mail::send(\Config::get('laravel-contact-form::mail.views'), \Input::all(), function($message)
		{
			$message->to(\Config::get('laravel-contact-form::mail.to.email'), \Config::get('laravel-contact-form::mail.to.name'))->subject(\Config::get('laravel-contact-form::mail.subject'));
		});

		return \Redirect::to(\Input::get('from'))->with('contact_form_message', \Lang::get('laravel-contact-form::copy.sent_message'));
	}

}