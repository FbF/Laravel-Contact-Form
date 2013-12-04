{{ Form::open(array('action' => 'Fbf\LaravelContactForm\ContactController@send', 'class' => 'contact-form')) }}

	{{ Form::hidden('from', Request::path()) }}

	@if (Session::has('contact_form_message'))
		<div class="alert alert-success">
			{{ Session::get('contact_form_message') }}
		</div>
	@endif

	@foreach (Config::get('laravel-contact-form::fields') as $fieldName => $options)

		<div class="form-group{{ $errors->has($fieldName) ? ' has-error' : '' }}">

			{{ Form::label($fieldName, trans('laravel-contact-form::copy.labels.'.$fieldName), array('class' => 'control-label contact-form-'.$fieldName.'-label')) }}

			@if ($options['type'] == 'textarea')
				{{ Form::textarea($fieldName, Input::old($fieldName), array('class' => 'form-control contact-form-'.$fieldName, 'placeholder' => trans('laravel-contact-form::copy.placeholders.'.$fieldName))) }}
			@elseif ($options['type'] == 'select')
				{{ Form::select($fieldName, $options['choices'], Input::old($fieldName), array('class' => 'form-control contact-form-'.$fieldName, 'placeholder' => trans('laravel-contact-form::copy.placeholders.'.$fieldName))) }}
			@else
				{{ Form::text($fieldName, Input::old($fieldName), array('class' => 'form-control contact-form-'.$fieldName, 'placeholder' => trans('laravel-contact-form::copy.placeholders.'.$fieldName))) }}
			@endif

			@if ($errors->has($fieldName))
				<span class="help-block">{{ $errors->first($fieldName) }}</span>
			@endif

		</div>

	@endforeach

	{{ Form::submit(trans('laravel-contact-form::copy.submit'), array('class' => 'btn btn-default contact-form-submit')) }}

{{ Form::close() }}