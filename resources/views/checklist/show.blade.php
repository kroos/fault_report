@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">
		<h1>{!! $inspection->belongtosystem->system !!} : {{ $inspection->title }}</h1>
	</div>
	<div class="card-body">

		<div class="row justify-content-center">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">

						<div class="row justify-content-center">
							<div class="col-4">Date : </div>
							<div class="col-8">{{ Carbon\Carbon::parse($inspection->date)->format('D, j M Y') }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Ticket Tracking ID : </div>
							<div class="col-8">{{ $inspection->ticket_tracking_id }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Building/Area : </div>
							<div class="col-8">{{ $inspection->building }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Tag : </div>
							<div class="col-8">{{ $inspection->tag }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Attendees : </div>
							<div class="col-8">
								@if ($inspection->hasmanyinspattendees()->get()->count())
									@foreach($inspection->hasmanyinspattendees()->get() as $attd)
										{{ $attd->belongtostaff->name }}<br />
									@endforeach
								@endif
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Remarks : </div>
							<div class="col-8">{!! $inspection->remarks !!}</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">Inspection Checklist</div>
					<div class="card-body">

						@if($inspection->hasmanyinspchecklist()->get())
							@foreach($inspection->hasmanyinspchecklist()->get() as $chec)
								<div class="row justify-content-center">
									<div class="col-8">{{ $chec->label }} : </div>
									<div class="col-4">{{ $chec->input }}</div>
								</div>
								@if(!is_null($chec->remarks))
									<div class="row justify-content-center">
										<div class="col-8">Remarks : </div>
										<div class="col-4">{{ $chec->remarks }}</div>
									</div>
								@endif
							@endforeach
						@endif

					</div>
				</div>
			</div>
		</div>
		<p>&nbsp;</p>

		@if(!is_null($inspection->remarks))
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">Remarks</div>
					<div class="card-body">
						{!! nl2br($inspection->remarks) !!}
					</div>
				</div>
			</div>
		</div>
		@endif

		<p>&nbsp;</p>

		<div class="row justify-content-center">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">Documents</div>
					<div class="card-body">
					@if($inspection->hasmanyinspdoc()->get()->count())
						@foreach($inspection->hasmanyinspdoc()->get() as $doc)
						<div class="row justify-content-center">
							<div class="col-4">{{ $doc->label }} : </div>
							<div class="col-8"><a href="{{ asset($doc->input) }}" target="_blank">{{ $doc->original_name }}</a></div>
						</div>
						@endforeach
					@endif
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">Images</div>
					<div class="card-body">
					@if($inspection->hasmanyinspimage()->get()->count())
						@foreach($inspection->hasmanyinspimage()->get() as $im)
						<div class="row justify-content-center">
							<div class="col-1">
								@if(\Auth::user()->staff_id == $im->belongtoinspection->staff_id)
									<span class="text-danger delete_image" title="Delete" data-id="{!! $im->id !!}"><i class="far fa-trash-alt"></i></span>
								@endif
							</div>
							<div class="col-11">
								<span data-toggle="modal" data-target="#form-{!! $im->id !!}">
									<img src="{{ asset($im->input) }}" class="rounded d-block img-fluid img-thumbnail" alt="" >
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
						</div>
						@endforeach
					@endif
					</div>
				</div>
			</div>
		</div>

		<p>&nbsp;</p>

		<div class="row">
			<div class="col-6">
				<div class="card">
					<div class="card-header">Reviewer</div>
					<div class="card-body">
						@foreach($inspection->hasmanyinspreviewed()->get() as $ir)
							<div class="row justify-content-center">
								<div class="col-4">{{ $ir->belongtostaff->name }}</div>
								<div class="col-8">{{ $ir->comments }}</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
			
			<div class="col-6">
				<div class="card">
					<div class="card-header">Approver</div>
					<div class="card-body">
						@foreach($inspection->hasmanyinspapproved()->get() as $ir)
							<div class="row justify-content-center">
								<div class="col-4">{{ $ir->belongtostaff->name }}</div>
								<div class="col-8">{{ $ir->comments }}</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>

		@if($inspection->ready == 1)
		<div class="row justify-content-center">
			<div class="col-auto">
				@if($inspection->reviewed == NULL)
				@if( $inspection->staff_id !=  \Auth::user()->belongtostaff->id )
				@if( \Auth::user()->belongtostaff->id == 3 || \Auth::user()->belongtostaff->id == 6 || \Auth::user()->belongtostaff->id == 7 || \Auth::user()->belongtostaff->id == 14 )
					<button class="btn btn-primary" role="button" aria-pressed="true" id="review"><i class="fas fa-binoculars"></i> Review</button>
				@endif
				@endif
				@endif
				@if($inspection->reviewed !== NULL && $inspection->approved == NULL)
				@if(\Auth::user()->belongtostaff->id == 2 || \Auth::user()->belongtostaff->id == 7)
					<button class="btn btn-primary" role="button" aria-pressed="true" id="approve"><i class="far fa-thumbs-up"></i> Approval</button>
				@endif
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
// delete image
$(document).on('click', '.delete_image', function(e){
	var productId = $(this).data('id');
	SwalDelete(productId);
	e.preventDefault();
});

function SwalDelete(productId){
	swal.fire({
		title: 'Are you sure?',
		text: "It will be deleted permanently!",
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
					url: '{{ url('inspectionImage') }}' + '/' + productId,
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


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
@endsection