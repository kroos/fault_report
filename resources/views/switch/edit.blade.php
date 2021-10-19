@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Add Switch</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		{!! Form::model( $switch, ['route' => ['switches.update', $switch->id], 'method' => 'PATCH', 'id' => 'form', 'files' => true]) !!}
			@include('switch._edit')
		{{ Form::close() }}

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
// add switch : add and remove row
var maxattd	= 10; //maximum input boxes allowed
var addattd	= $(".add_ptw");
var wrapaatd	= $(".ptw_wrap");

var xa = {!! $switch->hasmanyswtag()->get()->count() !!};
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
// switch tag delete
$(document).on('click', '.delete_ptw', function(e){
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
					url: '{{ url('switchTag') }}' + '/' + productId,
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