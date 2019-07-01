@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Edit Building</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::model( $building, ['route' => ['building.update', $building->id], 'method' => 'PATCH', 'id' => 'form', 'files' => true]) !!}
			@include('building._edit')
		{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
<?php
$rt1 = 1;
$rt2 = 1;
$rt3 = 1;
$rt4 = 1;
?>
/////////////////////////////////////////////////////////////////////////////////////////
// bootstrap validator

$('#form').bootstrapValidator({
	feedbackIcons: {
		valid: '',
		invalid: '',
		validating: ''
	},
	fields: {

		building: {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},

	}
});


/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////
@endsection