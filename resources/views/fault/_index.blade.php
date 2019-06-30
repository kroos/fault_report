<?php
use Carbon\Carbon;
use Carbon\CarbonPeriod;
?>
<div class="card">
	<div class="card-header">
		Fault Report
		<span class="float-right">
			<a href="{!! route('fault.create') !!}" class="btn btn-primary btn-sm">Create Report</a>
		</span>
	</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>Date</th>
					<th>Building</th>
					<th>System</th>
					<th>Sub System</th>
					<th>Device Tag</th>
					<th>Attendees</th>
					<th>Findings/Problem/Issues</th>
					<th>Solution</th>
					<th>Image</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\Fault::where('active', 1)->get() as $fa )
				<tr>
					<td>{{ Carbon::parse($fa->date)->format('D, j M Y') }}</td>
					<td>{{ $fa->belongtobuilding->building }}</td>
					<td>
						@if($fa->belongtomanysystem()->get()->count())
							@foreach($fa->belongtomanysystem()->get() as $b)
								{!! $b->system !!}<br />
							@endforeach
						@endif
					</td>
					<td>{!! $fa->subsystem !!}</td>
					<td>
						@if($fa->hasmanydevicetag()->get()->count())
							@foreach($fa->hasmanydevicetag()->get() as $r)
								{!! $r->device_tag !!}<br />
							@endforeach
						@endif
					</td>
					<td>
						@if($fa->belongtomanyattendees()->get()->count())
							@foreach($fa->belongtomanyattendees()->get() as $a)
								{!! $a->name !!}<br />
							@endforeach
						@endif
					</td>
					<td>{!! $fa->issue !!}</td>
					<td>{!! $fa->solution !!}</td>
					<td>
						@if($fa->hasmanyimage()->get()->count())
							@foreach($fa->hasmanyimage()->get() as $im)
								<div class="col-2 row">
									<span class="text-danger delete_image" data-id="{!! $im->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
									<span data-toggle="modal" data-target="#form-{!! $im->id !!}">
										<img src="{{ asset('storage/'.$im->image) }}" class="rounded d-block img-fluid img-thumbnail" alt="">
									</span>
								</div>

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
												<img src="{{ asset('storage/'.$im->image) }}" class="rounded d-block img-fluid img-thumbnail" alt="">
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
					</td>
					<td>
						@if(\Auth::user()->belongtostaff->id == $fa->id)
						<a href="{!! route('fault.edit', $fa->id) !!}" title="Update"><i class="far fa-edit"></i></a>
						<span class="text-danger inactivate" data-id="{!! $fa->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
						@endif
					</td>
				</tr>
@endforeach
			</tbody>
<!-- 			<tfoot>
				<tr>
					<td>3</td>
					<td>4</td>
				</tr>
			</tfoot> -->
		</table>

	</div>
</div>