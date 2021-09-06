@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">PPM Inspection Checklist</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('template.index') }}">Template</a>
			</li>
		</ul>

{!! $calendar->calendar() !!}

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>#</th>
					<th>System</th>
					<th>Title</th>
					<th>Date</th>
					<th>Building</th>
					<th>Device Tag</th>
					<th>Status</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Model\Inspection::all() as $ins)
					<tr  {!! (($ins->ready==1 && $ins->reviewed==1)?'class="table-primary"':NULL) !!}>
						<td>{{ $ins->id }}</td>
						<td>{{ $ins->belongtosystem->system }}</td>
						<td>{{ $ins->title }}</td>
						<td>{{ Carbon\Carbon::parse($ins->date)->format('D, j M Y') }}</td>
						<td>{{ $ins->building }}</td>
						<td>{{ $ins->tag }}</td>
						<td>
							@if($ins->ready == NULL && $ins->reviewed == NULL && $ins->approved == NULL)
								{{ 'User Update' }}
							@elseif($ins->ready == 1 && $ins->reviewed == NULL && $ins->approved == NULL)
								{{ 'Review' }}
							@elseif($ins->ready == 1 && $ins->reviewed == 1 && $ins->approved == NULL)
								{{ 'Approval' }}
							@elseif($ins->ready == 1 && $ins->reviewed == 1 && $ins->approved == 1)
								{{ 'Closed' }}
							@endif
						</td>
						<td>
							@if(\Auth::user()->belongtostaff->id == $ins->staff_id)
							@if(is_null($ins->ready))
							<a href="{!! route('inspection.edit', $ins->id) !!}" title="Update "><i class="far fa-edit"></i></a>
							@endif
							@endif
							<a href="{!! route('inspection.show', $ins->id) !!}" title="Show "><i class="far fa-eye"></i></a>
							<a href="{!! route('inspection.showpdf', $ins->id) !!}" title="Download" target="_blank"><i class="far fa-file-pdf"></i></a>
							@if(\Auth::user()->belongtostaff->id == $ins->staff_id)
							@if(\Auth::user()->belongtostaff->id == 2)
							<span class="text-danger delete" data-id="{!! $ins->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
							@endif
							@endif
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
{!! $calendar->script() !!}

/////////////////////////////////////////////////////////////////////////////////////////
// table
$.fn.dataTable.moment( 'ddd, D MMM YYYY h:mm A' );
$.fn.dataTable.moment( 'ddd, D MMM YYYY' );
$("#orderitem1,#orderitem2").DataTable({
	"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	"order": [[0, "asc" ]],	// sorting the 2nd column ascending
	// responsive: true
});

/////////////////////////////////////////////////////////////////////////////////////////
// order delete
$(document).on('click', '.delete', function(e){
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
					url: '{{ url('inspection') }}' + '/' + productId,
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
					swal.fire('Oops...', 'Something went wrong with ajax!', 'error');
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

/////////////////////////////////////////////////////////////////////////////////////////
@endsection