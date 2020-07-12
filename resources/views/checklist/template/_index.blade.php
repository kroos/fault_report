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
			<td>{{ $tem->title }}</td>
			<td>{{ $tem->description }}</td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>