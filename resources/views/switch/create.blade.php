@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Add Switch</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::open(['route' => ['switches.store'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
			@include('switch._create')
		{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
$('#sois_1,#ois_1').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	// width: '100%',
});

/////////////////////////////////////////////////////////////////////////////////////////
// add attendees : add and remove row
var maxattd	= 10; //maximum input boxes allowed
var addattd	= $(".add_ptw");
var wrapaatd	= $(".ptw_wrap");

var xa = 1;
$(addattd).click(function(){
	// e.preventDefault();

	//max input box allowed
	if(xa < maxattd){
		xa++;
		wrapaatd.append(
			'<div class="rowptw">' +
				'<div class="col-sm-12 form-row ">' +
					'<div class="col-sm-1 text-danger">' +
							'<i class="fas fa-trash remove_ptw" aria-hidden="true"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('sw.*.tag_number') ? 'has-error' : NULL }}">' +
						'<input name="sw[' + xa + '][tag_number]" type="text" value="{!! @$value !!}" class="form-control form-control-sm" id="ip' + xa + '" autocomplete="off" placeholder="Tag Switch" />' +
					'</div>' +
				'</div>' +
			'</div>'
		); //add input box

		//bootstrap validate
		$('#form').bootstrapValidator('addField', $('.rowptw') .find('[name="sw[' + xa + '][tag_number]"]'));
	}
});

$(wrapaatd).on("click",".remove_ptw", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowptw');
	var $row = $(this).parent().parent().parent();
	var $option2 = $row.find('[name="sw[][tag_number]"]');
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
		hostname: {
			validators: {
				notEmpty:{
					message:'Please insert Hostname. '
				},
			}
		},
		ip_address: {
			validators: {
				ipv4:{
					message:'Must be in IPv4 format. '
				},
				notEmpty:{
					message:'Please insert IP Address. '
				},
			}
		},
@for($l1=1;$l1<10;$l1++)
		'sw[{!! $l1 !!}][tag_number]': {
			validators: {
				notEmpty: {
					message: 'Please insert Tag Switch. '
				},
			}
		},
@endfor
	}
});

/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////
@endsection