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
					<th scope="row"><span class="float-right">Building : </span></th>
					<td>{{ $inspection->building }}</td>
				</tr>
				<tr>
					<th scope="row"><span class="float-right">Date : </span></th>
					<td>{{ Carbon\Carbon::parse($inspection->date)->format('D, j M Y') }}</td>
				</tr>
				<tr>
					<th scope="row"><span class="float-right">Remarks : </span></th>
					<td>{{ $inspection->remarks }}</td>
				</tr>
				<tr>
					<th scope="row"><span class="float-right">Attendees : </span></th>
					<td>
						@foreach($inspection->hasmanyinspattendees()->get() as $attd)
							{{ $attd->belongtostaff->name }}<br />
						@endforeach
					</td>
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
						<th scope="row"><span class="float-right">{{ $chec->label }}</span></th>
						<td>{{ $chec->input }}</td>
					</tr>
					@endforeach
					@foreach($inspection->hasmanyinspdoc()->get() as $doc)
					<tr>
						<th scope="row"><span class="float-right">{{ $doc->label }}</span></th>
						<td>
							<a href="{{ asset($doc->input) }}" target="_blank">{{ $doc->original_name }}</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		@foreach($inspection->hasmanyinspimage()->get() as $im)
		<div class="col-6">
				<span class="text-danger delete_image" data-id="{!! $im->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
				<span data-toggle="modal" data-target="#form-{!! $im->id !!}">
					<img src="{{ asset($im->input) }}" class="rounded d-block img-fluid img-thumbnail" alt="">
				</span>

			<!-- Modal -->
			<div class="modal fade" id="form-{!! $im->id !!}" tabindex="-1" role="dialog" aria-labelledby="Image-{!! $im->id !!}" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="Form-{!! $im->id !!}">Image</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img src="{{ asset($im->input) }}" class="rounded d-block img-fluid img-thumbnail" alt="">
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
</div>

@endsection

@section('js')
@endsection