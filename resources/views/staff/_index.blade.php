<?php
use Carbon\Carbon;
use Carbon\CarbonPeriod;
?>
<div class="card">
	<div class="card-header">
		Building
		<span class="float-right">
			<a href="{!! route('building.create') !!}" class="btn btn-primary btn-sm">Add New Building</a>
		</span>
	</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>#</th>
					<th>Building</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\Building::all() as $fa )
				<tr>
					<td>{!! $fa->id !!}</td>
					<td>{{ $fa->building }}</td>
					<td>
						<a href="{!! route('building.edit', $fa->id) !!}" title="Update"><i class="far fa-edit"></i></a>
						<span class="text-danger del_building" data-id="{!! $fa->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
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