{{ Form::open(array('action' => 'Fbf\LaravelContactForm\ContactController@send', 'class' => 'contact-form')) }}

	{{ Form::hidden('from', Request::path()) }}

	@if (Session::has('contact_form_message'))
		<div class="alert alert-success">
			{{ Session::get('contact_form_message') }}
		</div>
	@endif

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

		{{ Form::label('name', trans('laravel-contact-form::copy.name'), array('class' => 'control-label contact-form-name-label')) }}

		{{ Form::text('name', Input::old('name'), array('class' => 'form-control contact-form-name', 'placeholder' => trans('laravel-contact-form::copy.name'))) }}

		@if ($errors->has('name'))
			<span class="help-block">{{ $errors->first('name') }}</span>
		@endif

	</div>

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	
		{{ Form::label('email', trans('laravel-contact-form::copy.email'), array('class' => 'control-label contact-form-email-label')) }}
	
		{{ Form::text('email', Input::old('email'), array('class' => 'form-control contact-form-email', 'placeholder' => trans('laravel-contact-form::copy.email'))) }}
	
		@if ($errors->has('email'))
			<span class="help-block">{{ $errors->first('email') }}</span>
		@endif
	
	</div>

	<div class="form-group{{ $errors->has('enquiry') ? ' has-error' : '' }}">

		{{ Form::label('enquiry', trans('laravel-contact-form::copy.enquiry'), array('class' => 'control-label contact-form-enquiry-label')) }}

		{{ Form::textarea('enquiry', Input::old('enquiry'), array('class' => 'form-control contact-form-enquiry', 'placeholder' => trans('laravel-contact-form::copy.enquiry'))) }}

		@if ($errors->has('enquiry'))
			<span class="help-block">{{ $errors->first('enquiry') }}</span>
		@endif

	</div>

	{{ Form::submit(trans('laravel-contact-form::copy.submit'), array('class' => 'btn btn-default contact-form-submit')) }}

{{ Form::close() }}