@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Edit Switch Access</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::model( $swAccess, ['route' => ['swAccess.update', $swAccess->id], 'method' => 'PATCH', 'id' => 'form', 'files' => true]) !!}
			@include('swAccess._edit')
		{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
// table
$('#date').datetimepicker({
	// format:'YYYY-MM-DD hh:mm A',
	format:'YYYY-MM-DD',
	useCurrent: true,
	icons: {
		// time: "far fa-clock",
		date: "far fa-calendar-times",
		up: "fas fa-arrow-up",
		down: "fas fa-arrow-down"
	}
})
.on('dp.change dp.show dp.update', function(e) {
	$('#form').bootstrapValidator('revalidateField', 'date');
});

$('#subsystem').datetimepicker({
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
	$('#form').bootstrapValidator('revalidateField', 'request_start');
});

$('#subsystem1').datetimepicker({
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
	$('#form').bootstrapValidator('revalidateField', 'request_end');
});

$('#subsystem2').datetimepicker({
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
	$('#form').bootstrapValidator('revalidateField', 'access_start');
});

$('#subsystem3').datetimepicker({
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
	$('#form').bootstrapValidator('revalidateField', 'access_end');
});

/////////////////////////////////////////////////////////////////////////////////////////
<?php
$g1=1;
$g2=1;
$g3=1;
$g4=1;
?>
@foreach($swAccess->belongtomanyswitch()->get() as $ty)
$('#sois_{!! $g1++ !!},#ois_{!! $g2++ !!}').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	// width: '100%',
});


$(document).ready(function() {
$('#sois_{!! $g3++ !!}').chained('#ois_{!! $g4++ !!}');
});
@endforeach()

/////////////////////////////////////////////////////////////////////////////////////////
// add system : add and remove row
var max_fields	= 10; //maximum input boxes allowed
var add_buttons	= $(".add_pic");
var wrappers	= $(".pic_wrap");

var xs = {!! $swAccess->hasmanypic()->get()->count() !!};
$(add_buttons).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xs < max_fields){
		xs++;
		wrappers.append(
			'<div class="rowpic">' +
				'<div class="col-sm-12 form-row ">' +
					'<div class="col-sm-1 text-danger">' +
						'<input type="hidden" name="pic[' + xs + '][id]" value="">' +
							'<i class="fas fa-trash remove_pic" aria-hidden="true"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('pic.*.swAccess_PIC') ? 'has-error' : NULL }}">' +
						'<input name="pic[' + xs + '][swAccess_PIC]" type="text" value="{!! @$value !!}" class="form-control form-control-sm" id="oi_' + xs + '" autocomplete="off" placeholder="Requester" />' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('pic.*.email') ? 'has-error' : NULL }}">' +
						'<input type="text" name="pic[' + xs + '][email]" class="form-control form-control-sm" id="oiai_' + xs + '" autocomplete="off" placeholder="Email" />' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowpic') .find('[name="pic[' + xs + '][swAccess_PIC]"]'));
		$('#form').bootstrapValidator('addField', $('.rowpic') .find('[name="pic[' + xs + '][email]"]'));
	}
});

$(wrappers).on("click",".remove_pic", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowsystem');
	var $row = $(this).parent().parent().parent();
	var $option1 = $row.find('[name="pic[][swAccess_PIC]"]');
	var $option2 = $row.find('[name="pic[][email]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option1);
	$('#form').bootstrapValidator('removeField', $option2);
	console.log(xs);
	xs--;
})

/////////////////////////////////////////////////////////////////////////////////////////
// add attendees : add and remove row
var maxattd	= 10; //maximum input boxes allowed
var addattd	= $(".add_ptw");
var wrapaatd	= $(".ptw_wrap");

var xa = {!! $swAccess->hasmanyptw()->get()->count() !!};
$(addattd).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xa < maxattd){
		xa++;
		wrapaatd.append(
			'<div class="rowptw">' +
				'<div class="col-sm-12 form-row ">' +
					'<div class="col-sm-1 text-danger">' +
						'<input type="hidden" name="ptw[' + xa + '][id]" value="">' +
							'<i class="fas fa-trash remove_ptw" aria-hidden="true"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('ptw.*.swAccess_PTW') ? 'has-error' : NULL }}">' +
						'<input name="ptw[' + xa + '][swAccess_PTW]" type="text" value="{!! @$value !!}" class="form-control form-control-sm" id="ptw_' + xa + '" autocomplete="off" placeholder="PTW No" />' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowptw') .find('[name="ptw[' + xa + '][swAccess_PTW]"]'));
	}
});

$(wrapaatd).on("click",".remove_ptw", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowptw');
	var $row = $(this).parent().parent().parent();
	var $option2 = $row.find('[name="ptw[][swAccess_PTW]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option2);
	console.log(xa);
	xa--;
})

/////////////////////////////////////////////////////////////////////////////////////////
// add attendees : add and remove row
var maxdtag	= 10; //maximum input boxes allowed
var adddtag	= $(".add_switch");
var wrapdtag	= $(".switch_wrap");

var xd = {!! $swAccess->belongtomanyswitch()->get()->count() !!};
$(adddtag).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xd < maxdtag){
		xd++;
		wrapdtag.append(
			'<div class="rowswitch">' +
				'<div class="col-sm-12 form-row">' +
					'<div class="col-sm-1 text-danger">' +
							'<i class="fas fa-trash remove_switch" aria-hidden="true" ></i>' +
							'<input type="hidden" name="sw1[' + xd + '][id]" value="">' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('sw1.*.switch_id') ? 'has-error' : '' }}">' +
						'<select name="sw1[' + xd + '][switch_id]" id="ois_' + xd + '" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">' +
							'<option value="">Please choose</option>' +
@foreach( \App\Model\Switches::all() as $mod )
							'<option value="{!! $mod->id !!}" {{ ($mod->id == 0)?'selected':'' }}>{!! $mod->hostname !!}</option>' +
@endforeach
						'</select>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('sw1.*.swtag_id') ? 'has-error' : '' }}">' +
						'<select name="sw1[' + xd + '][swtag_id]" id="sois_' + xd + '" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">' +
							'<option value="">Please choose</option>' +
@foreach( \App\Model\SwitchTag::all() as $mod1 )
							'<option value="{!! $mod1->id !!}" class="{{ $mod1->switch_id }}" {{ ($mod1->id == 0)?'selected':'' }}>{!! $mod1->tag_number !!}</option>' +
@endforeach
						'</select>' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		$('#ois_' + xd + ',#sois_' + xd).select2({
			placeholder: 'Please choose',
			allowClear: true,
			closeOnSelect: true,
			// width: '100%',
		});

		$('#sois_' + xd).chainedTo('#ois_' + xd);

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowswitch').find('[name="sw1[' + xd + '][switch_id]"]'));
		$('#form').bootstrapValidator('addField', $('.rowswitch').find('[name="sw1[' + xd + '][swtag_id]"]'));
	}
});

$(wrapdtag).on("click",".remove_switch", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowswitch');
	var $row = $(this).parent().parent().parent();
	var $option3 = $row.find('[name="sw1[][switch_id]"]');
	var $option4 = $row.find('[name="sw1[][swtag_id]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option3);
	console.log(xd);
	xd--;
})

/////////////////////////////////////////////////////////////////////////////////////////
// requester delete
$(document).on('click', '.delete_pic', function(e){
	var productId = $(this).data('id');
	SwalDelete(productId);
	e.preventDefault();
});

function SwalDelete(productId){
	swal.fire({
		title: 'Are you sure?',
		text: "Data will be deleted!",
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
					url: '{{ url('swAccPIC') }}' + '/' + productId,
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
// requester delete
$(document).on('click', '.delete_ptw', function(e){
	var productId = $(this).data('id');
	DeletePTW(productId);
	e.preventDefault();
});

function DeletePTW(productId){
	swal.fire({
		title: 'Are you sure?',
		text: "Data will be deleted!",
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
					url: '{{ url('swAccPTW') }}' + '/' + productId,
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
// requester delete
$(document).on('click', '.delete_switch', function(e){
	var productId = $(this).data('id');
	DeleteSwitch(productId);
	e.preventDefault();
});

function DeleteSwitch(productId){
	swal.fire({
		title: 'Are you sure?',
		text: "Data will be deleted!",
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
					url: '{{ url('swAccSW') }}' + '/' + productId,
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
					format: 'YYYY-MM-DD',
					message: 'The value is not a valid date. '
				},
				notEmpty:{
					message:'Please insert date. '
				},
			}
		},
@for($l1=0;$l1<10;$l1++)
		'pic[{{ $l1 }}][swAccess_PIC]': {
			validators: {
				notEmpty: {
					message: 'Please insert requester. '
				},
			}
		},
@endfor
@for($l2=0;$l2<10;$l2++)
		'pic[{{ $l2 }}][email]': {
			validators: {
				notEmpty: {
					message: 'Please insert email requester. '
				},
				regexp: {
					regexp: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
					message: 'Please insert valid email address. '
				},
			}
		},
@endfor
		company: {
			validators: {
				notEmpty: {
					message: 'Please insert company requester. '
				},
			}
		},
		subject: {
			validators: {
				notEmpty: {
					message: 'Please insert email subject of the requester. '
				},
			}
		},
@for($l3=0;$l3<10;$l3++)
		'ptw[{{ $l3 }}][swAccess_PTW]': {
			validators: {
				// notEmpty: {
				// 	message: 'Please insert PTW numbers. '
				// },
			}
		},
@endfor
		request_start: {
			validators: {
				date: {
					format: 'YYYY-MM-DD',
					message: 'The value is not a valid date. '
				},
			}
		},
		request_end: {
			validators: {
				date: {
					format: 'YYYY-MM-DD',
					message: 'The value is not a valid date. '
				},
			}
		},
@for($l4=0;$l4<10;$l4++)
		'sw1[{{ $l4 }}][switch_id]': {
			validators: {
				notEmpty: {
					message: 'Please insert switch hostname. '
				},
			}
		},
@endfor
@for($l5=0;$l5<10;$l5++)
		'sw2[{{ $l5 }}][swtag_id]': {
			validators: {
				notEmpty: {
					message: 'Please insert switch tag. '
				},
			}
		},
@endfor
		access_start: {
			validators: {
				date: {
					format: 'YYYY-MM-DD',
					message: 'This is not a valid date. '
				},
			}
		},
		access_end: {
			validators: {
				date: {
					format: 'YYYY-MM-DD',
					message: 'This is not a valid date. '
				},
			}
		},
		status_id: {
			validators: {
				notEmpty:{
					message:'Please choose status. '
				},
			}
		},
	}
});

/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////
@endsection