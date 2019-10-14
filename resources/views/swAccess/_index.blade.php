<?php
use Carbon\Carbon;
use Carbon\CarbonPeriod;
?>
<div class="card">
	<div class="card-header">
		Switch Access Open
		<span class="float-right">
			<a href="{!! route('swAccess.create') !!}" class="btn btn-primary btn-sm">Create Switches Access</a>
		</span>
	</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Date</th>
					<th>PIC</th>
					<!-- <th>Company</th> -->
					<th>Subject</th>
					<th>Hostname</th>
					<th>IP Address</th>
					<th>Tag</th>
					<th>PTW</th>
					<th>Req Start</th>
					<th>Req End</th>
					<th>Access Start</th>
					<th>Access End</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\SwitchAccess::where('status_id', 1)->get() as $sw )
				<tr>
					<td>
						<a href="{!! route('swAccess.edit', $sw->id) !!}" title="Update">{{ $sw->id }} <i class="far fa-edit"></i></a>
						<span class="text-danger inactivate" data-id="{!! $sw->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
					</td>
					<td>{!! Carbon::parse($sw->date)->format('D, j M Y') !!}</td>
					<td>
						@if($sw->hasmanypic()->get()->count())
							@foreach($sw->hasmanypic()->get() as $b)
								<!-- {!! $b->swAccess_PIC !!}&nbsp;{!! $b->email !!}<br /> -->
							@endforeach
						@endif
					</td>
					<!-- <td>{!! $sw->company !!}</td> -->
					<td>{!! $sw->subject !!}</td>
					<td>
						@if($sw->belongtomanyswitch()->get()->count())
							@foreach($sw->belongtomanyswitch()->get() as $c)
								{!! $c->hostname !!}<br />
							@endforeach
						@endif
					</td>
					<td>
						@if($sw->belongtomanyswitch()->get()->count())
							@foreach($sw->belongtomanyswitch()->get() as $c)
								{!! $c->ip_address !!}<br />
							@endforeach
						@endif
					</td>
					<td>
						@if($sw->belongtomanyswitchtag()->get()->count())
							@foreach($sw->belongtomanyswitchtag()->get() as $d)
								{!! $d->tag_number !!}<br />
							@endforeach
						@endif
					</td>
					<td>
						@if($sw->hasmanyptw()->get()->count())
							@foreach($sw->hasmanyptw()->get() as $b1)
								{!! $b1->swAccess_PTW !!}
							@endforeach
						@endif
					</td>
					<td>{!! (!is_null($sw->request_start))?Carbon::parse($sw->request_start)->format('D, j M Y'):NULL !!}</td>
					<td>{!! (!is_null($sw->request_end))?Carbon::parse($sw->request_end)->format('D, j M Y'):NULL !!}</td>
					<td>{!! (!is_null($sw->access_start))?Carbon::parse($sw->access_start)->format('D, j M Y'):NULL !!}</td>
					<td>{!! (!is_null($sw->access_end))?Carbon::parse($sw->access_end)->format('D, j M Y'):NULL !!}</td>
					<td>{!! $sw->belongtostatus->status !!}</td>
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
	<div class="card-header">Switch Access Close</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem2">
			<thead>
				<tr>
					<th>ID</th>
					<th>Date</th>
					<th>PIC</th>
					<th>Company</th>
					<th>Subject</th>
					<th>Hostname</th>
					<th>IP Address</th>
					<th>Tag</th>
					<th>PTW</th>
					<th>Req Start</th>
					<th>Req End</th>
					<th>Access Start</th>
					<th>Access End</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\SwitchAccess::where('status_id', 2)->get() as $sw )
				<tr>
					<td>
						<a href="{!! route('swAccess.edit', $sw->id) !!}" title="Update">{{ $sw->id }} <i class="far fa-edit"></i></a>
						<span class="text-danger inactivate" data-id="{!! $sw->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
					</td>
					<td>{!! Carbon::parse($sw->date)->format('D, j M Y') !!}</td>
					<td>
						@if($sw->hasmanypic()->get()->count())
							@foreach($sw->hasmanypic()->get() as $b)
								{!! $b->swAccess_PIC !!}&nbsp;{!! $b->email !!}<br />
							@endforeach
						@endif
					</td>
					<td>{!! $sw->company !!}</td>
					<td>{!! $sw->subject !!}</td>
					<td>
						@if($sw->belongtomanyswitch()->get()->count())
							@foreach($sw->belongtomanyswitch()->get() as $c)
								{!! $c->hostname !!}<br />
							@endforeach
						@endif
					</td>
					<td>
						@if($sw->belongtomanyswitch()->get()->count())
							@foreach($sw->belongtomanyswitch()->get() as $c)
								{!! $c->ip_address !!}<br />
							@endforeach
						@endif
					</td>
					<td>
						@if($sw->belongtomanyswitchtag()->get()->count())
							@foreach($sw->belongtomanyswitchtag()->get() as $d)
								{!! $d->tag_number !!}<br />
							@endforeach
						@endif
					</td>
					<td>
						@if($sw->hasmanyptw()->get()->count())
							@foreach($sw->hasmanyptw()->get() as $b1)
								{!! $b1->swAccess_PTW !!}
							@endforeach
						@endif
					</td>
					<td>{!! (!is_null($sw->request_start))?Carbon::parse($sw->request_start)->format('D, j M Y'):NULL !!}</td>
					<td>{!! (!is_null($sw->request_end))?Carbon::parse($sw->request_end)->format('D, j M Y'):NULL !!}</td>
					<td>{!! (!is_null($sw->access_start))?Carbon::parse($sw->access_start)->format('D, j M Y'):NULL !!}</td>
					<td>{!! (!is_null($sw->access_end))?Carbon::parse($sw->access_end)->format('D, j M Y'):NULL !!}</td>
					<td>{!! $sw->belongtostatus->status !!}</td>
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