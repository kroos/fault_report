@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Change Profile</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

{!! Form::model($staff, ['route' => ['profile.update', $staff->id], 'method' => 'PATCH', 'class' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}

			<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
				{{ Form::label( 'nam', 'Name : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('name', @$value, ['class' => 'form-control', 'id' => 'nam', 'placeholder' => 'Name', 'autocomplete' => 'off', 'disabled' => 'disabled']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
				{{ Form::label( 'nam', 'RAPID Pass ID : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('name', \Auth::user()->username, ['class' => 'form-control', 'id' => 'nam', 'placeholder' => 'Name', 'autocomplete' => 'off', 'disabled' => 'disabled']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
				{{ Form::label( 'email', 'Email : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('email', @$value, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
				{{ Form::label( 'ph', 'Phone : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('phone', @$value, ['class' => 'form-control', 'id' => 'ph', 'placeholder' => 'Email', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row mb-0">
				<div class="col-md-8 offset-md-4">
					{!! Form::button('Update', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
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