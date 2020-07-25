@extends('layouts.app')

@section('content')
<?php
use Illuminate\Http\Request;
use App\Model\Template;

$template = Template::find(request('template'));
$system = $template->belongtosystem->system;

$j = 1;
?>
<div class="card">
	<div class="card-header"><h1 class="card-title">PPM {{ $system }} Checklist Inspection</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

	{!! Form::open(['route' => ['inspection.store'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
	<div class="card">
		<div class="card-header">Front Page</div>
		<div class="card-body">
			<input type="hidden" name="system_id" value="{{ $template->system_id }}">

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

		<div class="form-group row {{ $errors->has('tag') ? 'has-error' : NULL }}">
			{{ Form::label( 'tagl', 'Tag : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::text('tag', @$value, ['class' => 'form-control form-control-sm', 'id' => 'tagl', 'placeholder' => 'Tag', 'autocomplete' => 'off']) }}
				@if ($errors->has('tag'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('tag') }}</strong>
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
		<div class="card-header">Inspection List</div>
		<div class="card-body">

		@if($template->count() > 0)
			@foreach($template->hasmanychecklist()->get() as $chec)

				@if($chec->input_type == 1)
					{!! \App\Helpers\FormHTML::fselectyesno($j++, $chec->label, $chec->input_type) !!}
				@endif

				@if($chec->input_type == 2)
					{!! \App\Helpers\FormHTML::fselectpassfail($j++, $chec->label, $chec->input_type) !!}
				@endif

				@if($chec->input_type == 3)
					{!! \App\Helpers\FormHTML::fselectgoodbad($j++, $chec->label, $chec->input_type) !!}
				@endif

				@if($chec->input_type == 4)
					{!! \App\Helpers\FormHTML::fselectcompliantnoncompliant($j++, $chec->label, $chec->input_type) !!}
				@endif

				@if($chec->input_type == 5)
					{!! \App\Helpers\FormHTML::ftext($j++, $chec->label, $chec->input_type) !!}
				@endif

				@if($chec->input_type == 6)
					{!! \App\Helpers\FormHTML::ftextarea($j++, $chec->label, $chec->input_type) !!}
				@endif

				@if($chec->input_type == 7)
					{!! \App\Helpers\FormHTML::fuploadimage($j++, $chec->label, $chec->input_type) !!}
				@endif

				@if($chec->input_type == 8)
					{!! \App\Helpers\FormHTML::fuploaddoc($j++, $chec->label, $chec->input_type) !!}
				@endif

			@endforeach
		@endif

		</div>
	</div>

	<div class="card">
		<div class="card-header">Remarks</div>
		<div class="card-body">
			<div class="form-group row {{ $errors->has('remarks') ? 'has-error' : NULL }}">
				<label for="rem" class="col-4 col-form-label text-right">Remarks : </label>
				<div class="col-6">
					<textarea name="remarks" class="form-control form-control-sm" id="rem" placeholder="Remarks" autocomplete="off" ></textarea>
						@if ($errors->has('remarks'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('remarks') }}</strong>
						</span>
						@endif
				</div>
			</div>
		</div>
	</div>

	<div class="form-group row mb-0">
		<div class="col-8 offset-4">
			{!! Form::button('Submit', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
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
					message: 'Please insert Building / Area. '
				},
			}
		},
		title: {
			validators: {
				notEmpty: {
					message: 'Please insert title. '
				},
			}
		},
		tag: {
			validators: {
				notEmpty: {
					message: 'Please insert title. '
				},
			}
		},
		remarks: {
			validators: {
				notEmpty: {
					message: 'Please insert remarks. '
				},
			}
		},
@for($l1=0;$l1<10;$l1++)
		'attd[{{ $l1 }}][attendees_id]': {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
@endfor
@for($l2=0;$l2<100;$l2++)
		'form[{{ $l2 }}][label]': {
			validators: {
				notEmpty: {
					message: 'Please insert value. '
				},
			}
		},
		'form[{{ $l2 }}][input]': {
			validators: {
				notEmpty: {
					message: 'Please insert value. '
				},
			}
		},
		'form[{{ $l2 }}][input_type]': {
			validators: {
				notEmpty: {
					message: 'Please insert value. '
				},
			}
		},
@endfor
@for($l3=0;$l3<100;$l3++)
		'image[{{ $l3 }}][label]': {
			validators: {
				notEmpty: {
					message: 'Please insert value. '
				},
			}
		},
		'image[{{ $l3 }}][input]': {
			validators: {
				notEmpty:{
					message: 'Please upload file. ',
				},
				file: {
					extension: 'jpeg,bmp,png,jpg',
					type: 'image/jpeg,image/png,image/bmp,image/jpg',
					maxSize: 5120*4096,
					message: 'The selected file is not valid'
				},
			}
		},
		'image[{{ $l3 }}][input_type]': {
			validators: {
				notEmpty: {
					message: 'Please insert value. '
				},
			}
		},
@endfor
@for($l4=0;$l4<100;$l4++)
		'doc[{{ $l4 }}][label]': {
			validators: {
				notEmpty: {
					message: 'Please insert value. '
				},
			}
		},
		'doc[{{ $l4 }}][input]': {
			validators: {
				notEmpty:{
					message: 'Please upload file. ',
				},
				file: {
					extension: 'pdf,txt,log,docx,doc,xlsx,xls,ppt,pptx',
					type: 'application/pdf,text/plain,application/msword,application/vnd.ms-excel,application/vnd.ms-powerpoint',
					maxSize: 5120*4096,
					message: 'The selected file is not valid'
				},
			}
		},
		'doc[{{ $l4 }}][input_type]': {
			validators: {
				notEmpty: {
					message: 'Please insert value. '
				},
			}
		},
@endfor
	}
});

/////////////////////////////////////////////////////////////////////////////////////////
@endsection