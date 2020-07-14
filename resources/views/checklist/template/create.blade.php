@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Create PPM Template Checklist</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::open(['route' => ['template.store'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}

		<div class="form-group row {{ $errors->has('title') ? 'has-error' : NULL }}">
			{{ Form::label( 'templateTitle', 'Template Title : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::text('title', @$value, ['class' => 'form-control form-control-sm', 'id' => 'templateTitle', 'placeholder' => 'Template Title', 'autocomplete' => 'off']) }}
				@if ($errors->has('title'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('title') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group row {{ $errors->has('system_id') ? 'has-error' : NULL }}">
			{{ Form::label( 'system_id', 'System : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::select('system_id', \App\Model\System::pluck('system', 'id')->sortKeys()->toArray(), @$value, ['class' => 'form-control form-control-sm', 'id' => 'system', 'placeholder' => 'Please Choose', 'autocomplete' => 'off']) }}
				@if ($errors->has('system_id'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('system_id') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label( 'syst', 'Type Form : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				<div class="col system_wrap">
					<div class="rowsystem">
						<div class="col-12 form-row">
							<div class="col-1 text-danger">
									<i class="fas fa-trash remove_system1" aria-hidden="true" id="delete_system_1"></i>
							</div>

							<div class="form-group col-5 {{ $errors->has('form.*.formtype') ? 'has-error' : NULL }}">
								<select name="form[1][formtype]" id="ois_1" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
									<option value="">Please choose</option>
		@foreach( config('fr.formtype') as $mod => $mo )
									<option value="{!! $mod !!}">{!! $mo !!}</option>
		@endforeach
								</select>
								@if ($errors->has('form.*.formtype'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('form.*.formtype') }}</strong>
								</span>
								@endif
							</div>

							<div class="form-group col-6 {{ $errors->has('form.*.label') ? 'has-error' : NULL }}">
								<input type="text" name="form[1][label]" id="oil_1" class="form-control form-control-sm" autocomplete="off" placeholder="Form Label">
								@if ($errors->has('form.*.label'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('form.*.label') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
				</div>
				<div class="row col-12 add_system">
					<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add System</span>
				</div>
			</div>
		</div>

		<div class="form-group row {{ $errors->has('description') ? 'has-error' : NULL }}">
			{{ Form::label( 'desc', 'Description : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::textarea('description', @$value, ['class' => 'form-control form-control-sm', 'id' => 'desc', 'placeholder' => 'Description', 'autocomplete' => 'off']) }}
				@if ($errors->has('description'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('description') }}</strong>
				</span>
				@endif
			</div>
		</div>











		<div class="form-group row mb-0">
			<div class="col-8 offset-4">
				{!! Form::button('Submit', ['class' => 'btn btn-primary', 'type' => 'submit', 'id' => 'btnsubmit']) !!}
			</div>
		</div>

		{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
// date
$('#date').datetimepicker({
	format:'YYYY-MM-DD hh:mm A',
	useCurrent: true,
	icons: {
		time: "far fa-clock",
		date: "far fa-calendar-times",
		up: "fas fa-arrow-up",
		down: "fas fa-arrow-down"
	}
})
.on('dp.change dp.show dp.update', function(e) {
	$('#form').bootstrapValidator('revalidateField', 'date');
});

/////////////////////////////////////////////////////////////////////////////////////////
// select2
$('#system,#ois_1,#attd_1,#pri,#sta').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	width: '100%',
});

/////////////////////////////////////////////////////////////////////////////////////////
// add system : add and remove row
var max_fields	= 50; //maximum input boxes allowed
var add_buttons	= $(".add_system");
var wrappers	= $(".system_wrap");

var xs = 1;
$(add_buttons).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xs < max_fields){
		xs++;
		wrappers.append(
			'<div class="rowsystem">' +
				'<div class="col-12 form-row">' +
					'<div class="col-1 text-danger">' +
							'<i class="fas fa-trash remove_system" aria-hidden="true" id="delete_system_' + xs + '"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('form.*.formtype') ? 'has-error' : NULL }}">' +
						'<select name="form[' + xs + '][formtype]" id="ois_' + xs + '" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">' +
							'<option value="">Please choose</option>' +
@foreach( config('fr.formtype') as $mod => $mo )
							'<option value="{!! $mod !!}">{!! $mo !!}</option>' +
@endforeach
						'</select>' +
						'@if ($errors->has('form.*.formtype'))' +
						'<span class="invalid-feedback" role="alert">' +
							'<strong>{{ $errors->first('form.*.formtype') }}</strong>' +
						'</span>' +
						'@endif' +
					'</div>' +
					'<div class="form-group col-6 {{ $errors->has('form.*.label') ? 'has-error' : '' }}">' +
						'<input type="text" name="form[' + xs + '][label]" id="oil_1" class="form-control form-control-sm" autocomplete="off" placeholder="Form Label">' +
						'@if ($errors->has('form.*.label'))' +
						'<span class="invalid-feedback" role="alert">' +
							'<strong>{{ $errors->first('form.*.label') }}</strong>' +
						'</span>' +
						'@endif' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		$('#ois_' + xs).select2({
			placeholder: 'Please choose',
			allowClear: true,
			closeOnSelect: true,
			width: '100%',
		});
		
		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowsystem') .find('[name="syst[' + xs + '][system_id]"]'));
	}
});

$(wrappers).on("click",".remove_system", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowsystem');
	var $row = $(this).parent().parent().parent();
	var $option1 = $row.find('[name="syst[][system_id]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option1);
	console.log(xs);
	xs--;
})

/////////////////////////////////////////////////////////////////////////////////////////
// bootstrap validator

$('#form').bootstrapValidator({
	feedbackIcons: {
		valid: '',
		invalid: '',
		validating: ''
	},
	fields: {
		title: {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
		system_id: {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
@for($l=0;$l<10;$l++)
		'form[{{ $l }}][formtype]': {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
@endfor
@for($l=0;$l<10;$l++)
		'form[{{ $l }}][label]': {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
@endfor
		description: {
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