@extends('layouts.app')

@section('content')
<?php
$j = 1;
$j1 = 1;
$j2 = 1;
$j3 = 1;
$j4 = 1;
?>
<div class="card">
	<div class="card-header"><h1 class="card-title">Edit PPM {{ $inspection->belongtosystem->system }} Checklist Inspection</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

	{!! Form::model($inspection, ['route' => ['inspection.update', $inspection->id], 'method' => 'PATCH', 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
	<div class="card">
		<div class="card-header">Front Page</div>
		<div class="card-body">

		<div class="form-group row {{ $errors->has('title') ? 'has-error' : NULL }}">
			{{ Form::label( 'titlel', 'Title : ', ['class' => 'col-4 col-form-label text-right'] ) }}
			<div class="col-6">
				{{ Form::text('title', @$value, ['class' => 'form-control form-control-sm', 'id' => 'titlel', 'placeholder' => 'Title', 'autocomplete' => 'off']) }}
				@if ($errors->has('title'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('title') }}</strong>
				</span>
				@endif
			</div>
		</div>

		{{ Form::hidden('system_id', @$value) }}

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
					@foreach($inspection->hasmanyinspattendees()->get() as $att)
					<div class="rowattd">
						<div class="col-12 form-row">
							<div class="col-1 text-danger">
								<i class="fas fa-trash remove_attd1" aria-hidden="true" id="delete_attd_1" data-id="{!! $att->id !!}"></i>
							</div>
							<div class="form-group col {{ $errors->has('attd.*.attendees_id') ? 'has-error' : '' }}">
									<select name="attd[{{ $j1++ }}][attendees_id]" id="attd_{{ $j2++ }}" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
										<option value="">Please choose</option>
										@foreach( \App\Model\Staff::where('active', 1)->get() as $mod )
										<option value="{!! $mod->id !!}" {{ ($mod->id == $att->attendees_id)?'selected':'' }}>{!! $mod->name !!}</option>
										@endforeach
									</select>
									<input type="hidden" name="attd[{{ $j3++ }}][id]" value="{{ $att->id }}">
								@if ($errors->has('attd.*.attendees_id'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('attd.*.attendees_id') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					@endforeach
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

		@if($inspection->hasmanyinspchecklist()->count() > 0)
			@foreach($inspection->hasmanyinspchecklist()->get() as $chec)

				@if($chec->input_type == 1)
					{!! \App\Helpers\UpdateFormHTML::fselectyesno($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif

				@if($chec->input_type == 2)
					{!! \App\Helpers\UpdateFormHTML::fselectpassfail($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif

				@if($chec->input_type == 3)
					{!! \App\Helpers\UpdateFormHTML::fselectgoodbad($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif

				@if($chec->input_type == 4)
					{!! \App\Helpers\UpdateFormHTML::fselectcompliantnoncompliant($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif

				@if($chec->input_type == 5)
					{!! \App\Helpers\UpdateFormHTML::ftext($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif

				@if($chec->input_type == 6)
					{!! \App\Helpers\UpdateFormHTML::ftextarea($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif

			@endforeach
		@endif

		@if($inspection->hasmanyinspimage()->count() > 0)
			@foreach($inspection->hasmanyinspimage()->get() as $chec)
				@if($chec->input_type == 7)
					{!! \App\Helpers\UpdateFormHTML::fuploadimage($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif
			@endforeach
		@else
			{!! \App\Helpers\FormHTML::fuploadimage(1, 'Image 1', 7) !!}
		@endif

		@if($inspection->hasmanyinspdoc()->count() > 0)
			@foreach($inspection->hasmanyinspdoc()->get() as $chec)
				@if($chec->input_type == 8)
					{!! \App\Helpers\UpdateFormHTML::fuploaddoc($chec->id, $chec->label, $chec->input_type, $chec->input, $chec->remarks) !!}
				@endif
			@endforeach
		@else
			{!! \App\Helpers\FormHTML::fuploaddoc(1, 'Document 1', 8) !!}
		@endif

		</div>
	</div>

	<div class="card">
		<div class="card-header">Remarks</div>
		<div class="card-body">
			<div class="form-group row {{ $errors->has('remarks') ? 'has-error' : NULL }}">
				<label for="rem" class="col-4 col-form-label text-right">Remarks : </label>
				<div class="col-6">
					{{ Form::textarea('remarks', @$value, ['class' => 'form-control form-control-sm', 'id' => 'rem', 'placeholder' => 'Remarks', 'autocomplete' => 'off']) }}
						@if ($errors->has('remarks'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('remarks') }}</strong>
						</span>
						@endif
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">Ready for Review and Approval</div>
		<div class="card-body">
			<div class="form-group row {{ $errors->has('ready') ? 'has-error' : NULL }}">
				<label for="rem" class="col-4 col-form-label text-right">Ready : </label>
				<div class="col-6">
					<div class="form-check">
						<div class="pretty p-icon p-round p-pulse">
							<input type="hidden" name="ready" value="" checked />
							<input type="checkbox" name="ready" class="form-check-input" id="p0" value="1" {{ ($inspection->ready == 1?'checked':NULL) }} {{ (($inspection->reviewed == 1)?'disabled':NULL) }}/>
							<div class="state p-success">
								<i class="icon mdi mdi-check"></i>
								<label class="form-check-label" for="p0">Ready for Review and Approval</label>
							</div>
						</div>
					</div>
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
<?php
$p1 = 1;
$p2 = 1;
$p3 = 1;
$p4 = 1;
?>

@foreach($inspection->hasmanyinspattendees()->get() as $att)
$('#system,#ois_1,#attd_{{ $p1++ }},#pri,#sta').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	width: '100%',
});
@endforeach
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
var maxattd	= {{ ($inspection->hasmanyinspattendees()->count() > 0)?(10 - $inspection->hasmanyinspattendees()->count()):10 }}; //maximum input boxes allowed
var addattd	= $(".add_attd");
var wrapaatd	= $(".attd_wrap");

var xa = {{ $inspection->hasmanyinspattendees()->count() }};
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
						'<input type="hidden" name="attd[' + xa + '][id]" value="">' +
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
$(document).on('click', '.remove_attd1', function(e){
	var productId = $(this).data('id');
	SwalDelete(productId);
	e.preventDefault();
});

function SwalDelete(productId){
	swal.fire({
		title: 'Are you sure?',
		text: "It will be deleted permanently!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!',
		showLoaderOnConfirm: true,

		preConfirm: function() {
			return new Promise(function(resolve) {
				$.ajax({
					type: 'DELETE',
					url: '{{ url('inspectionAttend') }}' + '/' + productId,
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: productId,
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Deleted!', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
					//$('#disable_user_' + productId).parent().parent().remove();
				})
				.fail(function(){
					swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
				})
			});
		},
		allowOutsideClick: false
	})
	.then((result) => {
		if (result.dismiss === swal.DismissReason.cancel) {
			swal.fire('Cancelled', 'Your data is safe from delete', 'info')
		}
	});
}

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
//				notEmpty:{
//					message: 'Please upload file. ',
//				},
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
//				notEmpty:{
//					message: 'Please upload file. ',
//				},
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