@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Reset Password</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

{!! Form::open(['route' => ['reset_pass'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true,  'data-toggle' => 'validator']) !!}

			<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
				{{ Form::label( 'email', 'Email : ', ['class' => 'col-4 col-form-label text-right'] ) }}
				<div class="col-6">
					{{ Form::text('email', @$value, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
				{{ Form::label( 'pass1', 'Password : ', ['class' => 'col-4 col-form-label text-right'] ) }}
				<div class="col-6">
					{{ Form::password('password', ['class' => 'form-control', 'id' => 'pass1', 'placeholder' => 'Password', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('password-confirm') ? 'has-error' : '' }}">
				{{ Form::label( 'pass2', 'Confirm Password : ', ['class' => 'col-4 col-form-label text-right'] ) }}
				<div class="col-6">
					{{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'pass2', 'placeholder' => 'Confirm Password', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row mb-0">
				<div class="col-8 offset-4">
					{!! Form::button('Change Password', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
				</div>
			</div>
{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
///////////////////////////////////////////////////////////////////////
$('#form').bootstrapValidator({
	feedbackIcons: {
		valid: '',
		invalid: '',
		validating: ''
	},
	fields: {
		email: {
			validators: {
				notEmpty: {
					message: 'Please insert your email. '
				},
				regexp: {
					regexp: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
					message: 'Please insert your valid email address. '
				},
			}
		},
		password: {
			validators: {
				notEmpty: {
					message: 'Please insert new password. '
				},
				identical: {
					field: 'password_confirmation',
					message: 'The password and its confirm are not the same'
				},
			}
		},
		'password_confirmation': {
			validators: {
				notEmpty: {
					message: 'Please insert new password again. '
				},
				identical: {
					field: 'password',
					message: 'The password and its confirm are not the same'
				},
			}
		},
	}
})
//	.find('[name="messagea"]')
//	.ckeditor()
//	.editor
//	// To use the 'change' event, use CKEditor 4.2 or later
//	.on('change', function(e) {
//		// Revalidate the bio field
//		$('#formuser').bootstrapValidator('revalidateField', 'messagea');
//		// console.log('asd');
//	});

@endsection