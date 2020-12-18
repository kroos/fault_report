@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Report : {{ $fault->title }}</h1></div>
	<div class="card-body">

		<div class="row justify-content-center">
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<div class="row justify-content-center">
							<div class="col-4">Ticket ID :</div>
							<div class="col-8">{{ $fault->ticket_id }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Priority :</div>
							<div class="col-8">{{ $fault->belongtopriority->priority }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Attendees</div>
							<div class="col-8">
								@if($fault->belongtomanyattendees()->get()->count())
									@foreach($fault->belongtomanyattendees()->get() as $a)
										{!! $a->name !!}<br />
									@endforeach
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6">
				<div class="card">
					<div class="card-body">

						<div class="row justify-content-center">
							<div class="col-4">Date :</div>
							<div class="col-8">{{ Carbon\Carbon::parse($fault->date)->format('D, j M Y g:i A') }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Dateline :</div>
							<div class="col-8">{{ Carbon\Carbon::parse($fault->dateline)->format('D, j M Y g:i A') }}</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">Bulding :</div>
							<div class="col-8">{{ $fault->belongtobuilding->building }}</div>
						</div>

						<div class="row justify-content-center">
							<div class="col-4">System :</div>
							<div class="col-8">
								@if($fault->belongtomanysystem()->get()->count())
									@foreach($fault->belongtomanysystem()->get() as $b)
										{!! $b->system !!}<br />
									@endforeach
								@endif
							</div>
						</div>

						<div class="row justify-content-center">
							<div class="col-4">Subsystem :</div>
							<div class="col-8">{{ $fault->subsystem }}</div>
						</div>

						<div class="row justify-content-center">
							<div class="col-4">Device Tag :</div>
							<div class="col-8">
								@if($fault->hasmanydevicetag()->get()->count())
									@foreach($fault->hasmanydevicetag()->get() as $r)
										{!! $r->device_tag !!}<br />
									@endforeach
								@endif
							</div>
						</div>

						<div class="row justify-content-center">
							<div class="col-4">Status :</div>
							<div class="col-8">{{ $fault->status_id }}</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-6">
				<div class="card">
					<div class="card-header">Issues</div>
					<div class="card-body">{!! nl2br($fault->issue) !!}</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-header">Solution</div>
					<div class="card-body">{!! nl2br($fault->solution) !!}</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-6">
				<div class="card">
					<div class="card-header">Images</div>
					<div class="card-body">

						@if($fault->hasmanyimage()->get()->count())
							@foreach($fault->hasmanyimage()->get() as $im)
								<div class="col-6">
									<span class="text-danger delete_image" data-id="{!! $im->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
									<span data-toggle="modal" data-target="#form-{!! $im->id !!}">
										<img src="{{ asset('public/'.$im->image) }}" class="rounded d-block img-fluid img-thumbnail" alt="">
									</span>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="form-{!! $im->id !!}" tabindex="-1" role="dialog" aria-labelledby="Image-{!! $im->id !!}" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="Image-{!! $im->id !!}">Image</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<img src="{{ asset('public/'.$im->image) }}" class="rounded d-block img-fluid img-thumbnail" alt="">
											</div>
											<div class="modal-footer">
												{!! Form::button('Close', ['type' => 'button', 'class' => 'btn btn-primary', 'data-dismiss' => 'modal']) !!}
											</div>
										</div>
									</div>
								</div>
								<!-- modal end -->

							@endforeach
						@endif

					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-header">Documents</div>
					<div class="card-body">

						@if($fault->hasmanyfaultdoc()->get()->count())
							@foreach($fault->hasmanyfaultdoc()->get() as $doc)
								<span class="text-danger delete_doc" data-id="{!! $doc->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
								<a href="{{ asset($doc->doc) }}" target="_blank">{{ $doc->original_name }}</a><br>
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>



	</div>
</div>
@endsection

@section('js')
@endsection