@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Add New Members</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::open(['route' => ['staff.store'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
			@include('staff._create')
		{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
// bootstrap validator

$('#form').bootstrapValidator({
	feedbackIcons: {
		valid: '',
		invalid: '',
		validating: ''
	},
	fields: {
		name: {
			validators: {
				notEmpty: {
					message: 'Please insert username. ',
				}
			}
		},
		username: {
			validators: {
				notEmpty: {
					message: 'Please insert name. ',
				}
			}
		},
		phone: {
			validators: {
				notEmpty: {
					message: 'Please insert phone number. '
				}
			}
		},

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
});


/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////
@endsection