@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Setting</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')


		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" href="{!! route('staff.create') !!}">Add Members</a>
			</li>

		</ul>

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Position</th>
					<th>System</th>
					<th>Roles</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
@foreach(\App\Model\Staff::where('active', 1)->get() as $j)
				<tr>
					<td>{!! $j->id !!}</td>
					<td>{!! $j->name !!}</td>
					<td>{!! $j->belongtoposition->position !!}</td>
					<td>
@foreach($j->belongtomanysystem()->get() as $h)
						{!! $h->system !!}<br />
@endforeach
					</td>
					<td>{!! $j->name !!}</td>
					<td>
						<a href="{!! route('staff.edit', $j->id) !!}" title="Update"><i class="far fa-edit"></i></a>
						<span class="text-danger inactivate" data-id="{!! $j->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
					</td>
				</tr>
@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('js')
/////////////////////////////////////////////////////////////////////////////////////////
// table
$.fn.dataTable.moment( 'ddd, D MMM YYYY h:mm A' );
$.fn.dataTable.moment( 'ddd, D MMM YYYY' );
$("#orderitem1,#orderitem2").DataTable({
	"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	"order": [[0, "asc" ]],	// sorting the 1st column ascending
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
		text: "User will be deactivate!",
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
					url: '{{ url('staff') }}' + '/' + productId,
					// url: '{{ url('staff') }}' + '/' + productId,
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
			swal.fire('Cancelled', 'User is safe from deactivate.', 'info')
		}
	});
}

/////////////////////////////////////////////////////////////////////////////////////////

@endsection