@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Forgot Password</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

{!! Form::open(['route' => ['retrieve_password'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true,  'data-toggle' => 'validator']) !!}

			<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
				{{ Form::label( 'email', 'Email : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('email', @$value, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row mb-0">
				<div class="col-md-8 offset-md-4">
					{!! Form::button('Retrieve', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
				</div>
			</div>
{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
///////////////////////////////////////////////////////////////////////
$('#form').bootstrapValidator({
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