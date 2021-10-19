<div class="card">
	<div class="card-header">
		Add Switch
		<span class="float-right">
			<a href="{!! route('switches.create') !!}" class="btn btn-primary btn-sm">Add Switches</a>
		</span>
	</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Hostname</th>
					<th>IP Address</th>
					<th>Switch Tag</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\Switches::all() as $sw )
				<tr>
					<td>{!! $sw->id !!}</td>
					<td>{!! $sw->hostname !!}</td>
					<td>{!! $sw->ip_address !!}</td>
					<td>
						@foreach($sw->hasmanyswtag()->get() as $swt)
							{!! $swt->tag_number !!}<br />
						@endforeach
					</td>
					<td>
						<a href="{!! route('switches.edit', $sw->id) !!}" title="Update"><i class="far fa-edit"></i></a>
						<span class="text-danger inactivate" data-id="{!! $sw->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
					</td>
				</tr>
@endforeach
			</tbody>
<!-- 			<tfoot>
				<tr>
					<td>3</td>
					<td>4</td>
					<td>4</td>
					<td>4</td>
					<td>4</td>
				</tr>
			</tfoot> -->
		</table>

	</div>
</div>