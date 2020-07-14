@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">PPM Checklist Create</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

	{!! Form::open(['route' => ['checklist.store'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
	<div class="card">
		<div class="card-header">Front Page</div>
		<div class="card-body">

		<div class="form-group row {{ $errors->has('title') ? 'has-error' : NULL }}">
			{{ Form::label( 'titl', 'PPM Checklist Title : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::text('title', @$value, ['class' => 'form-control form-control-sm', 'id' => 'titl', 'placeholder' => 'PPM Checklist Title', 'autocomplete' => 'off']) }}
				@if ($errors->has('title'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('title') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group row {{ $errors->has('date') ? 'has-error' : NULL }}">
			{{ Form::label( 'date', 'Conducted On : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::text('date', @$value, ['class' => 'form-control form-control-sm', 'id' => 'date', 'placeholder' => 'Conducted On', 'autocomplete' => 'off']) }}
				@if ($errors->has('date'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('date') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group row {{ $errors->has('building') ? 'has-error' : NULL }}">
			{{ Form::label( 'building', 'Area / Building : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::text('building', @$value, ['class' => 'form-control form-control-sm', 'id' => 'building', 'placeholder' => 'Area / Building', 'autocomplete' => 'off']) }}
				@if ($errors->has('building'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('building') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label( 'attd', 'Attendees : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				<div class="col attd_wrap">
					<div class="rowattd">
						<div class="col-12 form-row">
							<div class="col-1 text-danger">
									<i class="fas fa-trash remove_attd1" aria-hidden="true" id="delete_attd_1"></i>
							</div>

							<div class="form-group col {{ $errors->has('attd.*.attendees_id') ? 'has-error' : '' }}">
								<select name="attd[1][attendees_id]" id="attd_1" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
									<option value="">Please choose</option>
		@foreach( \App\Model\Staff::where('active', 1)->get() as $mod )
									<option value="{!! $mod->id !!}" {{ ($mod->id == \Auth::user()->belongtostaff->id)?'selected':'' }}>{!! $mod->name !!}</option>
		@endforeach
								</select>
								@if ($errors->has('attd.*.attendees_id'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('attd.*.attendees_id') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
				</div>
				<div class="row col-12 add_attd">
					<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Attendees</span>
				</div>
			</div>
		</div>


		</div>
	</div>

	<div class="card">
		<div class="card-header">Front Page</div>
		<div class="card-body">gerabah</div>
	</div>




	<div class="form-group row mb-0">
		<div class="col-8 offset-4">
			{!! Form::button('Save', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
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
	// format:'YYYY-MM-DD hh:mm A',
	format:'YYYY-MM-DD',
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
// select2
$('#bid,#ois_1,#attd_1,#pri,#sta').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	width: '100%',
});

/////////////////////////////////////////////////////////////////////////////////////////
// add attendees : add and remove row
var maxattd	= 10; //maximum input boxes allowed
var addattd	= $(".add_attd");
var wrapaatd	= $(".attd_wrap");

var xa = 1;
$(addattd).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xa < maxattd){
		xa++;
		wrapaatd.append(
			'<div class="rowattd">' +
				'<div class="col-sm-12 form-row">' +
					'<div class="col-sm-1 text-danger">' +
							'<i class="fas fa-trash remove_attd" aria-hidden="true" id="delete_attd_' + xa + '"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('attd.*.attendees_id') ? 'has-error' : '' }}">' +
						'<select name="attd[' + xa + '][attendees_id]" id="attd_' + xa + '" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">' +
							'<option value="">Please choose</option>' +
@foreach( \App\Model\Staff::where('active', 1)->get() as $mod )
							'<option value="{!! $mod->id !!}" {{ ($mod->id == 0)?'selected':'' }}>{!! $mod->name !!}</option>' +
@endforeach
						'</select>' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		$('#attd_' + xa).select2({
			placeholder: 'Please choose',
			allowClear: true,
			closeOnSelect: true,
			width: '100%',
		});
		
		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowattd') .find('[name="attd[' + xa + '][attendees_id]"]'));
	}
});

$(wrapaatd).on("click",".remove_attd", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowattd');
	var $row = $(this).parent().parent().parent();
	var $option2 = $row.find('[name="attd[][attendees_id]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option2);
	console.log(xa);
	xa--;
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
		date: {
			validators: {
				date: {
					// format: 'YYYY-MM-DD hh:mm A',
					format: 'YYYY-MM-DD',
					message: 'The value is not a valid date. '
				},
				notEmpty:{
					message:'Please insert date. '
				},
			}
		},
		building: {
			validators: {
				notEmpty: {
					message: 'Please insert building / Area. '
				},
			}
		},
@for($l1=0;$l1<10;$l1++)
		// 'attd[{{ $l1 }}][attendees_id]': {
		// 	validators: {
		// 		notEmpty: {
		// 			message: 'Please select. '
		// 		},
		// 	}
		// },
@endfor
@for($l2=0;$l2<10;$l2++)
		// 'dtag[{{ $l2 }}][device_tag]': {
		// 	validators: {
		// 		notEmpty: {
		// 			message: 'Please insert device tag. '
		// 		},
		// 	}
		// },
@endfor
	}
});

/////////////////////////////////////////////////////////////////////////////////////////
@endsection