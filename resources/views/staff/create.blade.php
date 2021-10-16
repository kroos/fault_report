@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Add New Members</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::open(['route' => ['staff.store'], 'id' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
			@include('staff._create')
		{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
// select2
$('#pos,#ois_1').select2({
	placeholder: 'Please choose',
	allowClear: true,
	closeOnSelect: true,
	//width: '100%',
});

/////////////////////////////////////////////////////////////////////////////////////////
// add system : add and remove row
var max_fields	= 10; //maximum input boxes allowed
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
				'<div class="col-sm-12 form-row">' +
					'<div class="col-sm-1 text-danger">' +
							'<i class="fas fa-trash remove_system" aria-hidden="true" id="delete_system_' + xs + '"></i>' +
					'</div>' +
					'<div class="form-group col {{ $errors->has('system_id.*') ? 'has-error' : '' }}">' +
						'<select name="system_id[' + xs + ']" id="ois_' + xs + '" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">' +
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
		$('#form').bootstrapValidator('addField', $('.rowsystem') .find('[name="system_id[' + xs + ']"]'));
	}
});

$(wrappers).on("click",".remove_system", function(e){
	//user click on remove text
	e.preventDefault();
	//var $row = $(this).parent('.rowsystem');
	var $row = $(this).parent().parent().parent();
	var $option1 = $row.find('[name="system_id[]"]');
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
		name: {
			validators: {
				notEmpty: {
					message: 'Please insert username. ',
				}
			}
		},
		username: {
			validators: {
				notEmpty: {
					message: 'Please insert name. ',
				}
			}
		},
		phone: {
			validators: {
				notEmpty: {
					message: 'Please insert phone number. '
				}
			}
		},

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
		position_id: {
			validators: {
				notEmpty: {
					message: 'Please select position. '
				},
			}
		},
		password: {
			validators: {
				notEmpty: {
					message: 'Please select position. '
				},
				identical: {
					field: 'password_confirmation',
					message: 'The password and its confirm are not the same'
				},
			}
		},
		'password_confirmation': {
			validators: {
				notEmpty: {
					message: 'Please select position. '
				},
				identical: {
					field: 'password',
					message: 'The password and its confirmation are not the same'
				},
			}
		},
@for($i=1; $i < 10; $i++)
		'system_id[{!! $i !!}]': {
			validators: {
				notEmpty: {
					message: 'Please insert select system responsibility. '
				},
			}
		},
@endfor
	}
});


/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////
@endsection