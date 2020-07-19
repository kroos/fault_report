<table id="template" class="table table-hover" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Owner</th>
			<th>System</th>
			<th>Title</th>
			<th>Description</th>
			<th>#</th>
		</tr>
	</thead>
	<tbody>
		@foreach(App\Model\Template::all() as $tem)
		<tr>
			<td>{{ $tem->id }}</td>
			<td>{{ $tem->belongtostaff->name }}</td>
			<td>{{ $tem->belongtosystem->system }}</td>
			<td>
				<a href="{{ route('inspection.create', 'template='.$tem->id) }}" title="Create Inspection">{{ $tem->title }} <i class="fas fa-angle-double-right"></i></a>
			</td>
			<td>{{ $tem->description }}</td>
			<td>
				<a href="{!! route('template.edit', $tem->id) !!}" title="Update"><i class="far fa-edit"></i></a>
				<span class="text-danger inactivate" data-id="{!! $tem->id !!}" title="Delete"><i class="far fa-trash-alt"></i></span>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>