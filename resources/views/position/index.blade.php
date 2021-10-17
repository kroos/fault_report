@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Position</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		@include('position._index')

	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
// table
$.fn.dataTable.moment( 'ddd, D MMM YYYY h:mm A' );
$.fn.dataTable.moment( 'ddd, D MMM YYYY' );
$("#orderitem1,#orderitem2").DataTable({
	"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	"order": [[0, "acs" ]],	// sorting the 1st column ascending
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
		allowOutsideClick: false,

		preConfirm: function() {
			return new Promise(function(resolve) {
				$.ajax({
					type: 'DELETE',
					url: '{{ url('position') }}' + '/' + productId,
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
	})
	.then((result) => {
		if (result.dismiss === swal.DismissReason.cancel) {
			swal.fire('Cancelled', 'Your data is safe from delete', 'info')
		}
	});
}

/////////////////////////////////////////////////////////////////////////////////////////
@endsection