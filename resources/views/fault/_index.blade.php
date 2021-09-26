<?php
use Carbon\Carbon;
use Carbon\CarbonPeriod;
?>
<div class="card">
	<div class="card-header">
		Fault Report Open
		<span class="float-right">
			<a href="{!! route('fault.create') !!}" class="btn btn-primary btn-sm">Create Report</a>
		</span>
	</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Device Tag</th>
					<th>Date</th>
					<th>Building</th>
					<th>System</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\Fault::where([['active', 1], ['status_id', 1]])->get() as $fa )
				<tr>
					<td>
						{{ $fa->id }} <a href="{!! route('fault.edit', $fa->id) !!}" title="Update"><i class="far fa-edit"></i></a>
						<a href="{!! route('fault.show', $fa->id) !!}" title="Show"><i class="fas fa-tv"></i></a>
						<a href="{!! route('fault.showpdf', $fa->id) !!}" title="Show"><i class="far fa-file-pdf"></i></a>
						<span class="text-danger inactivate" data-id="{!! $fa->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
					</td>
					<td>{{ $fa->title }}</td>
					<td>
						@if($fa->hasmanydevicetag()->get()->count())
							@foreach($fa->hasmanydevicetag()->get() as $fau)
								{!! $fau->device_tag !!}<br />
							@endforeach
						@endif
					</td>
					<td>{{ Carbon::parse($fa->date)->format('D, j M Y g:i A') }}</td>
					<td>{{ $fa->belongtobuilding->building }}</td>
					<td>
						@if($fa->belongtomanysystem()->get()->count())
							@foreach($fa->belongtomanysystem()->get() as $b)
								{!! $b->system !!}<br />
							@endforeach
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
<p>&nbsp;</p>
<div class="card">
	<div class="card-header">Fault Report Close</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem2">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Device Tag</th>
					<th>Date</th>
					<th>Building</th>
					<th>System</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\Fault::where([['active', 1], ['status_id', 2]])->get() as $fa )
				<tr>
					<td>
						{{ $fa->id }} <a href="{!! route('fault.edit', $fa->id) !!}" title="Update"><i class="far fa-edit"></i></a>
						<a href="{!! route('fault.show', $fa->id) !!}" title="Show"><i class="fas fa-tv"></i></a>
						<span class="text-danger inactivate" data-id="{!! $fa->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
					</td>
					<td>{{ $fa->title }}</td>
					<td>
						@if($fa->hasmanydevicetag()->get()->count())
							@foreach($fa->hasmanydevicetag()->get() as $fau)
								{!! $fau->device_tag !!}<br />
							@endforeach
						@endif
					</td>
					<td>{{ Carbon::parse($fa->date)->format('D, j M Y g:i A') }}</td>
					<td>{{ $fa->belongtobuilding->building }}</td>
					<td>
						@if($fa->belongtomanysystem()->get()->count())
							@foreach($fa->belongtomanysystem()->get() as $b)
								{!! $b->system !!}<br />
							@endforeach
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