@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
		<h1>{!! $inspection->belongtosystem->system !!} : {{ $inspection->title }}</h1>
	</div>
	<div class="card-body">
		<table class="table">
			<tbody>
				<tr>
					<th scope="row"><span class="float-right">Date : </span></th>
					<td>{{ Carbon\Carbon::parse($inspection->date)->format('D, j M Y') }}</td>
				</tr>
				<tr>
					<th scope="row"><span class="float-right">Building : </span></th>
					<td>{{ $inspection->building }}</td>
				</tr>
				<tr>
					<th scope="row"><span class="float-right">Tag : </span></th>
					<td>{{ $inspection->tag }}</td>
				</tr>
				<tr>
					<th scope="row"><span class="float-right">Attendees : </span></th>
					<td>
						@foreach($inspection->hasmanyinspattendees()->get() as $attd)
							{{ $attd->belongtostaff->name }}<br />
						@endforeach
					</td>
				</tr>
				<tr>
					<th scope="row"><span class="float-right">Remarks : </span></th>
					<td>{{ $inspection->remarks }}</td>
				</tr>
			</tbody>
		</table>


		<div class="col-6 offset-3">
			<table class="table">
				<thead>
					<tr>
						<th colspan="2"><h4 class="text-center">Inspection Checklist</h4></th>
					</tr>
				</thead>
				<tbody>
					@foreach($inspection->hasmanyinspchecklist()->get() as $chec)
					<tr>
						<th scope="row"><span class="float-right">{{ $chec->label }} : </span></th>
						<td>{{ $chec->input }}</td>
					</tr>
					<tr>
						<td colspan="2"><p class="text-center"><strong>Remarks : </strong>{{ $chec->remarks }}</p></td>
					</tr>
					@endforeach
					@foreach($inspection->hasmanyinspdoc()->get() as $doc)
					<tr>
						<th scope="row"><span class="float-right">{{ $doc->label }} : </span></th>
						<td>
							<a href="{{ asset($doc->input) }}" target="_blank">{{ $doc->original_name }}</a>
						</td>
					</tr>
					<tr>
						<td colspan="2"><p class="text-center"><strong>Remarks : </strong>{{ $doc->remarks }}</p></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			@foreach($inspection->hasmanyinspimage()->get() as $im)
			<div class="col-6">
					<span class="text-danger delete_image" data-id="{!! $im->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
					<span data-toggle="modal" data-target="#form-{!! $im->id !!}">
						<img src="{{ asset($im->input) }}" class="rounded d-block img-fluid img-thumbnail" alt="">
					</span>

				<!-- Modal -->
				<div class="modal fade" id="form-{!! $im->id !!}" tabindex="-1" role="dialog" aria-labelledby="Image-{!! $im->id !!}" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered ">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="Image-{!! $im->id !!}">Image</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="{{ asset($im->input) }}" class="rounded d-block img-fluid img-thumbnail" alt="{{ $im->remarks }}">
							</div>
							<div class="modal-footer">
								{!! Form::button('Close', ['type' => 'button', 'class' => 'btn btn-primary', 'data-dismiss' => 'modal']) !!}
							</div>
						</div>
					</div>
				</div>
				<!-- modal end -->
			</div>
			@endforeach
		</div>
		@if($inspection->ready == 1)
		<div class="row justify-content-center">
			<div class="col-auto">
				@if($inspection->reviewed == NULL)
				<button class="btn btn-primary" role="button" aria-pressed="true" id="review"><i class="fas fa-binoculars"></i> Review</button>
				@endif
				@if($inspection->reviewed !== NULL && $inspection->approved == NULL)
				<button class="btn btn-primary" role="button" aria-pressed="true" id="approve"><i class="far fa-thumbs-up"></i> Approval</button>
				@endif
			</div>
		</div>
		@endif
	</div>
</div>

@endsection

@section('js')

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$("#review").click(function (event){
	event.preventDefault();
	productId = {{ $inspection->id }};

	swal.fire({
		width: '75%',
		title: 'Review Comment',
		text: "Please review",
		type: 'question',
		showCancelButton: true,
		confirmButtonText: 'Submit',
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		showLoaderOnConfirm: true,
		allowOutsideClick: false,
		allowEscapeKey: false,
		html:

				'<div class="form-group row ">' +
					'<label for="sta" class="col-md-4 col-form-label text-md-right">Review : </label>' +
					'<div class="col-md-6">' +
						'<div class="form-check">' +
							'<div class="pretty p-icon p-round p-pulse">' +
								'<input type="checkbox" name="reviewed" class="form-check-input" id="p0" value="1" />' +
								'<div class="state p-success">' +
									'<i class="icon mdi mdi-check"></i>' +
									'<label class="form-check-label" for="p0">Approved</label>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>' +
				'<div class="form-group row ">' +
					'<label for="iss" class="col-md-4 col-form-label text-md-right">Comment : </label>' +
					'<div class="col-md-6">' +
						'<textarea class="form-control form-control-sm" id="iss" placeholder="Comment" autocomplete="off" name="comments"></textarea>' +
					'</div>' +
				'</div>'
		,
		preConfirm: function() {
			return new Promise(function(resolve) {
				$.ajax({
					type: 'PATCH',
					url: '{{ url('inspection') }}' + '/' + productId + '/updatereview',
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: productId,
							reviewed: $('input[name="reviewed"]').prop("checked"),
							comments: $('textarea[name="comments"]').val(),
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Done Reviewed', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
				})
				.fail(function(jqXHR, textStatus, errorThrown){
					swal.fire({
						type: 'error',
						title: 'Please check your inputs',
						html: '<p class="text-danger">' + jqXHR.responseJSON.errors.comments + '</p>',
					});
				})
			});
		},
	})
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$("#approve").click(function (event){
	event.preventDefault();
	productId = {{ $inspection->id }};

	swal.fire({
		width: '75%',
		title: 'Approve Comment',
		text: "Please approve",
		type: 'question',
		showCancelButton: true,
		confirmButtonText: 'Submit',
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		showLoaderOnConfirm: true,
		allowOutsideClick: false,
		allowEscapeKey: false,
		html:

				'<div class="form-group row ">' +
					'<label for="sta" class="col-md-4 col-form-label text-md-right">Approve : </label>' +
					'<div class="col-md-6">' +
						'<div class="form-check">' +
							'<div class="pretty p-icon p-round p-pulse">' +
								'<input type="checkbox" name="approved" class="form-check-input" id="p0" value="1" />' +
								'<div class="state p-success">' +
									'<i class="icon mdi mdi-check"></i>' +
									'<label class="form-check-label" for="p0">Approved</label>' +
								'</div>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>' +
				'<div class="form-group row ">' +
					'<label for="iss" class="col-md-4 col-form-label text-md-right">Comment : </label>' +
					'<div class="col-md-6">' +
						'<textarea class="form-control form-control-sm" id="iss" placeholder="Comment" autocomplete="off" name="comments"></textarea>' +
					'</div>' +
				'</div>'
		,
		preConfirm: function() {
			return new Promise(function(resolve) {
				$.ajax({
					type: 'PATCH',
					url: '{{ url('inspection') }}' + '/' + productId + '/updateapprove',
					data: {
							_token : $('meta[name=csrf-token]').attr('content'),
							id: productId,
							approved: $('input[name="approved"]').prop("checked"),
							comments: $('textarea[name="comments"]').val(),
					},
					dataType: 'json'
				})
				.done(function(response){
					swal.fire('Done Approved', response.message, response.status)
					.then(function(){
						window.location.reload(true);
					});
				})
				.fail(function(jqXHR, textStatus, errorThrown){
					swal.fire({
						type: 'error',
						title: 'Please check your inputs',
						html: '<p class="text-danger">' + jqXHR.responseJSON.errors.comments + '</p>',
					});
				})
			});
		},
	})
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





@endsection