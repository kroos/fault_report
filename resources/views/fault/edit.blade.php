@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Create Report</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::model( $fault, ['route' => ['fault.update', $fault->id], 'method' => 'PATCH', 'id' => 'form', 'files' => true]) !!}
			@include('fault._edit')
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
// table
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

$('#dateline').datetimepicker({
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
	$('#form').bootstrapValidator('revalidateField', 'dateline');
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
// select2
@foreach( $fault->belongtomanysystem()->get() as $fau )
$('#ois_{!! $rt1++ !!}').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	width: '100%',
});
@endforeach

@foreach( $fault->belongtomanyattendees()->get() as $fauat )
$('#attd_{!! $rt2++ !!}').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	width: '100%',
});
@endforeach

/////////////////////////////////////////////////////////////////////////////////////////
// add system : add and remove row
var max_fields	= 10; //maximum input boxes allowed
var add_buttons	= $(".add_system");
var wrappers	= $(".system_wrap");

var xs = {{ $fault->belongtomanysystem()->get()->count() }};
$(add_buttons).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xs < max_fields){
		xs++;
		wrappers.append(
			'<div class="rowsystem">' +
				'<div class="col-sm-12 form-row">' +
					'<div class="col-sm-1 text-danger">' +
							'<i class="fas fa-trash remove_system" aria-hidden="true" id="delete_system_' + xs + '"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('syst.*.system_id') ? 'has-error' : '' }}">' +
						'<select name="syst[' + xs + '][system_id]" id="ois_' + xs + '" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">' +
							'<option value="">Please choose</option>' +
@foreach( \App\Model\System::all() as $mod )
							'<option value="{!! $mod->id !!}" {{ ($mod->id == 0)?'selected':'' }}>{!! $mod->system !!}</option>' +
@endforeach
						'</select>' +
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
// add attendees : add and remove row
var maxattd	= 10; //maximum input boxes allowed
var addattd	= $(".add_attd");
var wrapaatd = $(".attd_wrap");

var xa = {{ $fault->belongtomanyattendees()->get()->count() }};
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
// add device tag : add and remove row
var maxdtag	= 10; //maximum input boxes allowed
var adddtag	= $(".add_dtag");
var wrapdtag	= $(".dtag_wrap");

var xd = {{ $fault->hasmanydevicetag()->get()->count() }};
$(adddtag).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xd < maxdtag){
		xd++;
		wrapdtag.append(
			'<div class="rowdtag">' +
				'<div class="col-sm-12 form-row">' +
					'<div class="col-sm-1 text-danger">' +
						'<i class="fas fa-trash remove_dtag" aria-hidden="true" id="delete_dtag_' + xd + '"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('dtag.*.device_tag') ? 'has-error' : '' }}">' +
						'<input type="text" name="dtag[' + xd + '][device_tag]" id="devtag_' + xd + '" class="form-control form-control-sm" placeholder="Device Tag" autocomplete="off">' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowdtag').find('[name="dtag[' + xd + '][device_tag]"]'));
	}
});

$(wrapdtag).on("click",".remove_dtag", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowdtag');
	var $row = $(this).parent().parent().parent();
	var $option3 = $row.find('[name="dtag[][device_tag]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option3);
	console.log(xd);
	xd--;
})

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
// system delete
$(document).on('click', '.delete_system', function(e){
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
					type: 'POST',
					// url: '{{ url('faultSystem') }}' + '/' + productId,
					url: '{{ route('fault.system', $fault->id) }}',
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
// deviceTag delete
$(document).on('click', '.delete_dtag', function(e){
	var dTagId = $(this).data('id');
	SwalDTag(dTagId);
	e.preventDefault();
});

function SwalDTag(dTagId){
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
					type: 'POST',
					// url: '{{ url('faultSystem') }}' + '/' + dTagId,
					url: '{{ route('fault.deviceTag', $fault->id) }}',
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: dTagId,
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Deleted!', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
					//$('#disable_user_' + dTagId).parent().parent().remove();
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
// attendees delete
$(document).on('click', '.delete_attd', function(e){
	var AttdId = $(this).data('id');
	SwalAttd(AttdId);
	e.preventDefault();
});

function SwalAttd(AttdId){
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
					type: 'POST',
					// url: '{{ url('fault.attendees') }}' + '/' + AttdId,
					url: '{{ route('fault.attendees', $fault->id) }}',
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: AttdId,
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Deleted!', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
					//$('#disable_user_' + AttdId).parent().parent().remove();
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
// add findings : add and remove row
var maxffind	= 10; //maximum input boxes allowed
var addffind	= $(".add_ffind");
var wrapffind	= $(".ffind_wrap");

var xff = {!! $fault->hasmanyfaultfinding()->get()->count() !!};
$(addffind).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xff < maxffind){
		xff++;
		wrapffind.append(
			'<div class="rowffind">' +
				'<div class="form-row">' +
					'<div class="col-sm-1 text-danger">' +
						'<i class="fas fa-trash remove_ffind" aria-hidden="true" id="delete_ffind_' + xff + '"></i>' +
					'</div>' +
					'<div class="form-group col row {{ $errors->has('ffind.*.finding') ? 'has-error' : '' }}">' +
						'<textarea class="form-control form-control-sm col-md-8" id="ffind_' + xff + '" placeholder="Findings" autocomplete="off" name="ffind[' + xff + '][finding]">' +
						'</textarea>' +
						'<input class="form-control form-control-sm form-control-file col-md-4" id="ffimage_' + xff + '" placeholder="Finding Images" multiple="multiple" name="ffind[' + xff + '][image][]" type="file">' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowffind').find('[name="ffind[' + xff + '][finding]"]'));
		$('#form').bootstrapValidator('addField', $('.rowffind').find('[name="ffind[' + xff + '][image][]"]'));
	}
});

$(wrapffind).on("click",".remove_ffind", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowffind');
	var $row = $(this).parent().parent().parent();
	var $option4 = $row.find('[name="ffind[' + xff + '][finding]"]');
	var $option7 = $row.find('[name="ffind[' + xff + '][image][]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option4);
	$('#form').bootstrapValidator('removeField', $option7);
	console.log(xff);
	xff--;
})

/////////////////////////////////////////////////////////////////////////////////////////
// add issues : add and remove row
var maxfissu	= 10; //maximum input boxes allowed
var addfissu	= $(".add_fissu");
var wrapfissu	= $(".fissu_wrap");

var xfi = {!! $fault->hasmanyfaultissue()->get()->count() !!};
$(addfissu).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xfi < maxfissu){
		xfi++;
		wrapfissu.append(
			'<div class="rowfissu">' +
				'<div class="form-row">' +
					'<div class="col-sm-1 text-danger">' +
						'<i class="fas fa-trash remove_fissu" aria-hidden="true" id="delete_fissu_' + xfi + '"></i>' +
					'</div>' +
					'<div class="form-group col row {{ $errors->has('fissu.*.issue') ? 'has-error' : '' }}">' +
						'<textarea class="form-control form-control-sm col-md-8" id="fissu_' + xfi + '" placeholder="Issues" autocomplete="off" name="fissu[' + xfi + '][issue]">' +
						'</textarea>' +
						'<input class="form-control form-control-sm form-control-file col-md-4" id="fiimage_' + xfi + '" placeholder="Issue Images" multiple="multiple" name="fissu[' + xfi + '][image][]" type="file">' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowfissu').find('[name="fissu[' + xfi + '][issue]"]'));
		$('#form').bootstrapValidator('addField', $('.rowfissu').find('[name="fissu[' + xfi + '][image][]"]'));
	}
});

$(wrapfissu).on("click",".remove_fissu", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowfissu');
	var $row = $(this).parent().parent().parent();
	var $option5 = $row.find('[name="fissu[' + xfi + '][issue]"]');
	var $option8 = $row.find('[name="fissu[' + xfi + '][image][]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option5);
	$('#form').bootstrapValidator('removeField', $option8);
	console.log(xfi);
	xfi--;
})

/////////////////////////////////////////////////////////////////////////////////////////
// add solution : add and remove row
var maxfsolu	= 10; //maximum input boxes allowed
var addfsolu	= $(".add_fsolu");
var wrapfsolu	= $(".fsolu_wrap");

var xfs = {!! $fault->hasmanyfaultsolution()->get()->count() !!};
$(addfsolu).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xfs < maxfsolu){
		xfs++;
		wrapfsolu.append(
			'<div class="rowfsolu">' +
				'<div class="form-row">' +
					'<div class="col-sm-1 text-danger">' +
						'<i class="fas fa-trash remove_fsolu" aria-hidden="true" id="delete_fsolu_' + xfs + '"></i>' +
					'</div>' +
					'<div class="form-group col row {{ $errors->has('fsolu.*.solution') ? 'has-error' : '' }}">' +
						'<textarea class="form-control form-control-sm col-md-8" id="fsolu_' + xfs + '" placeholder="Solution" autocomplete="off" name="fsolu[' + xfs + '][solution]">' +
						'</textarea>' +
						'<input class="form-control form-control-sm form-control-file col-md-4" id="fiimage_' + xfs + '" placeholder="Solution Images" multiple="multiple" name="fsolu[' + xfs + '][image][]" type="file">' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowfsolu').find('[name="fsolu[' + xfs + '][solution]"]'));
		$('#form').bootstrapValidator('addField', $('.rowfsolu').find('[name="fsolu[' + xfs + '][image][]"]'));
	}
});

$(wrapfsolu).on("click",".remove_fsolu", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowfsolu');
	var $row = $(this).parent().parent().parent();
	var $option6 = $row.find('[name="fsolu[' + xfs + '][solution]"]');
	var $option9 = $row.find('[name="fsolu[' + xfs + '][image][]"]');
	$row.remove();

	$('#form').bootstrapValidator('removeField', $option6);
	$('#form').bootstrapValidator('removeField', $option9);
	console.log(xfs);
	xfs--;
})

/////////////////////////////////////////////////////////////////////////////////////////
// finding delete
$(document).on('click', '.delete_ffind', function(e){
	var AttdId = $(this).data('id');
	SwalFfind(AttdId);
	e.preventDefault();
});

function SwalFfind(AttdId){
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
					url: '{{ url('faultFinding') }}' + '/' + AttdId,
					// url: '{{ route('faultFinding.destroy', $fault->id) }}',
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: AttdId,
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Deleted!', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
					//$('#disable_user_' + AttdId).parent().parent().remove();
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
// issue delete
$(document).on('click', '.delete_fissu', function(e){
	var AttdId = $(this).data('id');
	SwalFissu(AttdId);
	e.preventDefault();
});

function SwalFissu(AttdId){
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
					url: '{{ url('faultIssue') }}' + '/' + AttdId,
					// url: '{{ route('faultFinding.destroy', $fault->id) }}',
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: AttdId,
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Deleted!', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
					//$('#disable_user_' + AttdId).parent().parent().remove();
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
// solution delete
$(document).on('click', '.delete_fsolu', function(e){
	var AttdId = $(this).data('id');
	SwalFSolu(AttdId);
	e.preventDefault();
});

function SwalFSolu(AttdId){
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
					url: '{{ url('faultSolution') }}' + '/' + AttdId,
					// url: '{{ route('faultFinding.destroy', $fault->id) }}',
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: AttdId,
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Deleted!', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
					//$('#disable_user_' + AttdId).parent().parent().remove();
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
					format: 'YYYY-MM-DD hh:mm A',
					message: 'The value is not a valid date. '
				},
				notEmpty:{
					message:'Please insert date. '
				},
			}
		},
		title: {
			validators: {
				notEmpty: {
					message: 'Please insert title'
				}
			},
		},
		// ticket_id: {
		// 	validators: {
		// 		notEmpty: {
		// 			message: 'Please insert ticket ID'
		// 		}
		// 	},
		// },
		// dateline: {
		// 		validators: {
		// 			date: {
		// 				format: 'YYYY-MM-DD',
		// 				message: 'The value is not a valid date. '
		// 			},
		// 			notEmpty:{
		// 				message:'Please insert dateline. '
		// 			},
		// 		}
		// 	},
		building_id: {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
		priority_id: {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
		status_id: {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
@for($l=0;$l<10;$l++)
		'syst[{{ $l }}][system_id]': {
			validators: {
				notEmpty: {
					message: 'Please select. '
				},
			}
		},
@endfor
		subsystem: {
			validators: {
				notEmpty: {
					message: 'Please select. '
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
@foreach($fault->hasmanyfaultfinding()->get() as $ffindi)
		'ffind[{!! $ffindi->id !!}][finding]': {
			validators: {
				notEmpty: {
					message: 'Please insert findings. '
				},
			}
		},
		'ffind[{!! $ffindi->id !!}][image][]': {
			validators: {
				// notEmpty: {
				// 	message: 'Please insert images. '
				// },
				file: {
					extension : 'jpeg,png,bmp,jpg',
					type: 'image/jpeg,image/png,image/x-ms-bmp',
					message: 'The selected file is not valid',
				}
			}
		},
@endforeach
@foreach($fault->hasmanyfaultissue()->get() as $fissue)
		'fissu[{!! $fissue->id !!}][issue]': {
			validators: {
				notEmpty: {
					message: 'Please insert findings. '
				},
			}
		},
		'fissu[{!! $fissue->id !!}][image][]': {
			validators: {
				// notEmpty: {
				// 	message: 'Please insert images. '
				// },
				file: {
					extension : 'jpeg,png,bmp,jpg',
					type: 'image/jpeg,image/png,image/x-ms-bmp',
					message: 'The selected file is not valid',
				}
			}
		},
@endforeach
@foreach($fault->hasmanyfaultsolution()->get() as $fsolut)
		'fsolu[{!! $fsolut->id !!}][solution]': {
			validators: {
				notEmpty: {
					message: 'Please insert findings. '
				},
			}
		},
		'fsolu[{!! $fsolut->id !!}][image][]': {
			validators: {
				// notEmpty: {
				// 	message: 'Please insert images. '
				// },
				file: {
					extension : 'jpeg,png,bmp,jpg',
					type: 'image/jpeg,image/png,image/x-ms-bmp',
					message: 'The selected file is not valid',
				}
			}
		},
@endforeach
@for($l3=0;$l3<10;$l3++)
		'ffind[{{ $l3 }}][finding]': {
			validators: {
				notEmpty: {
					message: 'Please insert findings. '
				},
			}
		},
		'ffind[{{ $l3 }}][image][]': {
			validators: {
				// notEmpty: {
				// 	message: 'Please insert images. '
				// },
				file: {
					extension : 'jpeg,png,bmp,jpg',
					type: 'image/jpeg,image/png,image/x-ms-bmp',
					message: 'The selected file is not valid',
				}
			}
		},
@endfor
@for($l4=0;$l4<10;$l4++)
		'fissu[{{ $l4 }}][issue]': {
			validators: {
				notEmpty: {
					message: 'Please insert issues. '
				},
			}
		},
		'fissu[{{ $l4 }}][image][]': {
			validators: {
				// notEmpty: {
				// 	message: 'Please insert images. '
				// },
				file: {
					extension : 'jpeg,png,bmp,jpg',
					type: 'image/jpeg,image/png,image/x-ms-bmp',
					message: 'The selected file is not valid',
				}
			}
		},
@endfor
@for($l5=0;$l5<10;$l5++)
		'fsolu[{{ $l5 }}][solution]': {
			validators: {
				notEmpty: {
					message: 'Please insert solution. '
				},
			}
		},
		'fsolu[{{ $l5 }}][image][]': {
			validators: {
				// notEmpty: {
				// 	message: 'Please insert images. '
				// },
				file: {
					extension : 'jpeg,png,bmp,jpg',
					type: 'image/jpeg,image/png,image/x-ms-bmp',
					message: 'The selected file is not valid',
				}
			}
		},
@endfor
		// issue: {
		// 	validators: {
		// 		notEmpty: {
		// 			message: 'Please insert data. '
		// 		},
		// 	}
		// },
		// solution: {
		// 	validators: {
		// 		notEmpty: {
		// 			message: 'Please insert data. '
		// 		},
		// 	}
		// },

	}
});


/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////
@endsection