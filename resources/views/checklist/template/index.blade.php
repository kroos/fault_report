@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header">
		PPM Inspection Checklist Template
		<span class="float-right">
			<a href="{!! route('template.create') !!}" class="btn btn-primary btn-sm">Create PPM Template Checklist</a>
		</span>
	</div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		@include('checklist.template._index')

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
// table
$.fn.dataTable.moment( 'ddd, D MMM YYYY h:mm A' );
$.fn.dataTable.moment( 'ddd, D MMM YYYY' );
$("#template").DataTable({
	"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	"order": [[0, "desc" ]],	// sorting the 2nd column ascending
	// responsive: true
});

/////////////////////////////////////////////////////////////////////////////////////////
// order delete
$(document).on('click', '.inactivate', function(e){
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
					url: '{{ url('template') }}' + '/' + productId,
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
// image delete
$(document).on('click', '.delete_image', function(e){
	var imgId = $(this).data('id');
	SwalImageDelete(imgId);
	e.preventDefault();
});

function SwalImageDelete(imgId){
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
					url: '{{ url('faultImage') }}' + '/' + imgId,
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: imgId,
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Deleted!', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
					//$('#disable_user_' + imgId).parent().parent().remove();
				})
				.fail(function(response){
					var resp = response.responseJSON;
					console.log(resp.errors);
					var x = "";
					for(i in resp.errors) {
						x += '<p class="text-danger">' + resp.errors[i] + '</p>';
					};
					swal.fire({
						title: 'Oops...',
						html: x,
						type: 'error',
					});
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
@endsection