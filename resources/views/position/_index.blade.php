<div class="card">
	<div class="card-header">
		Positions
		<span class="float-right">
			<a href="{!! route('position.create') !!}" class="btn btn-primary btn-sm">Add Position</a>
		</span>
	</div>
	<div class="card-body">

		<table class="table table-hover table-sm" style="font-size:12px" id="orderitem1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Position</th>
					<th>System Role</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
@foreach( \App\Model\Position::all() as $o )
				<tr>
					<td>{!! $o->id !!}</td>
					<td>{!! $o->position !!}</td>
					<td>{!! $o->belongtosystemrole->system_role !!}</td>
					<td>
						<a href="{!! route('position.edit', $o->id) !!}" title="Update"><i class="far fa-edit"></i></a>
						<span class="text-danger inactivate" data-id="{!! $o->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
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