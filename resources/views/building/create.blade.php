@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Add New Building</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::open(['route' => ['building.store'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
			@include('building._create')
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

		building: {
			validators: {
				notEmpty: {
					message: 'Please insert data. '
				},
			}
		},

	}
});


/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////
@endsection