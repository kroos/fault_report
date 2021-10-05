<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Emulating real sheets of paper in web documents (using HTML and CSS)">
	<title>Fault Report-{!! sprintf("%06d", $fault->id) !!}</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
</head>
<body>

	<div class="page-header" style="text-align: center">
		<table border="0" width="100%">
			<tbody>
				<tr>
					<td align="center" width="10%"><img src="{!! asset('images/logofgv.png') !!}" alt="FGV Prodata" width="100%" height="100%"></td>
					<td align="center" width="80%">
						<strong>PENGERANG INTEGRATED COMPLEX</strong><br />
						<strong>PETRONAS REFINERY AND PETROCHEMICAL CORPORATION</strong><br />
						<strong>UTILITIES & FACILITIES (PRPRC UF)</strong><br />
						<strong><u>FAULTY REPORT</u></strong>
					</td>
					<td align="center" width="10%"><img src="{!! asset('images/logo.png') !!}" alt="PETRONAS" width="100%" height="100%"></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="page-footer">
		<table border="0" width="100%">
			<thead>
				<tr>
					<td align="center"><font style="font-size:9pt; font-style: italic;" color="darkgrey">Telecom Department, PRPC UF Eng Instrument, PIC, Johor</font></td>
				</tr>
			</thead>
		</table>
	</div>

	<table>
		<thead>
			<tr>
				<td>
					<!--place holder for the fixed-position header-->
					<div class="page-header-space"></div>
				</td>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>
					<!--*** CONTENT GOES HERE ***-->
					<div class="page">

						<table border="1">
							<tr>
								<td colspan="2">Document no :</td>
								<th align="left" colspan="2">FGV-TISM-FR-{!! str_pad(request()->route()->fault->id, 6, '0', STR_PAD_LEFT) !!}</th>
							</tr>
							<tr>
								<td colspan="2">Project :</td>
								<th align="left" colspan="2">Telecom Infrastructure and System Maintenance</th>
							</tr>
							<tr>
								<td colspan="2">Project no :</td>
								<th align="left" colspan="2">PRPCUF/2020/0028</th>
							</tr>
							<tr>
								<td colspan="2">Date :</td>
								<th align="left" colspan="2">{!! \Carbon\Carbon::parse($fault->date)->format('D, j F Y') !!}</th>
							</tr>
							<tr>
								<td colspan="2">System :</td>
								<th align="left" colspan="2">

	@if($fault->belongtomanysystem()->get()->count() > 1)
		@foreach($fault->belongtomanysystem()->get() as $r)
			{!! $r->system.'<br />' !!}
		@endforeach
	@elseif($fault->belongtomanysystem()->get()->count() < 2)
		@foreach($fault->belongtomanysystem()->get() as $r)
			{!! $r->system; !!}
		@endforeach
	@endif

								</th>
							</tr>
							<tr>
								<td>Device Tag :</td>
								<th align="left">
	@if($fault->hasmanydevicetag()->get()->count() > 1)
		@foreach($fault->hasmanydevicetag()->get() as $r)
			{!! $r->device_tag.'<br />' !!}
		@endforeach
	@elseif($fault->hasmanydevicetag()->get()->count() < 2)
		@foreach($fault->hasmanydevicetag()->get() as $r)
			{!! $r->device_tag !!}
		@endforeach
	@endif
								</th>
								<td>Area/Location :</td>
								<th align="left">
									{!! $fault->belongtobuilding()->get()->first()->building !!}
								</th>
							</tr>
							<tr>
								<td>Ticket no :</td>
								<th align="left">
									{!! $fault->ticket_id !!}
								</th>
								<td>Attendees :</td>
								<th align="left">
	@if($fault->belongtomanyattendees()->get()->count() > 1)
		@foreach($fault->belongtomanyattendees()->get() as $r)
			{!! $r->name.'<br />' !!}
		@endforeach
	@elseif($fault->belongtomanyattendees()->get()->count() < 2)
		@foreach($fault->belongtomanyattendees()->get() as $r)
			{!! $r->name !!}
		@endforeach
	@endif
								</th>
							</tr>
						</table>

						<br />
<!-- findings -->
@if($fault->hasmanyfaultfinding()->get()->count())
						<table border="0">
							<tr>
								<th style="background-color: lightskyblue;">Findings</th>
							</tr>
						</table>

						<br />

						<table border="1">
							<tr>
								<th width="80%">Description</th>
								<th width="20%">Image</th>
							</tr>

								@foreach($fault->hasmanyfaultfinding()->get() as $ff)
							<tr>
								<td width="80%">{!! $ff->finding !!}</td>
								<td width="20%">
									@if($ff->hasmanyfindingimage()->get()->count())
									<table border="1">
												@foreach($ff->hasmanyfindingimage()->get() as $ffi)
										<tr>
											<td align="center">
												<img src="{!! asset('storage/'.$ffi->image) !!}" alt="" width="90%">
											</td>
										</tr>
												@endforeach
									</table>
									@else
										{!! 'No image' !!}
									@endif
								</td>
							</tr>
								@endforeach

						</table>

						<br />
@endif
<!-- issues -->
@if($fault->hasmanyfaultissue()->get()->count())
						<table border="0">
							<tr>
								<th style="background-color: lightskyblue;">Issues</th>
							</tr>
						</table>

						<br />

						<table border="1">
							<tr>
								<th width="80%">Description</th>
								<th width="20%">Image</th>
							</tr>
								@foreach($fault->hasmanyfaultissue()->get() as $ff)
							<tr>
								<td width="80%">{!! $ff->issue !!}</td>
								<td width="20%">
									@if($ff->hasmanyissueimage()->get()->count())
									<table border="1">
												@foreach($ff->hasmanyissueimage()->get() as $ffi)
										<tr>
											<td align="center">
												<img src="{!! asset('storage/'.$ffi->image) !!}" alt="" width="90%">
											</td>
										</tr>
												@endforeach
									</table>
									@else
										{!! 'No image' !!}
									@endif
								</td>
							</tr>
								@endforeach
						</table>

						<br />
@endif
<!-- solution -->
@if($fault->hasmanyfaultsolution()->get()->count())
						<table border="0">
							<tr>
								<th style="background-color: lightskyblue;">Solution</th>
							</tr>
						</table>

						<br />

						<table border="1">
							<tr>
								<th width="80%">Description</th>
								<th width="20%">Image</th>
							</tr>
								@foreach($fault->hasmanyfaultsolution()->get() as $ff)
							<tr>
								<td width="80%">{!! $ff->solution !!}</td>
								<td width="20%">
									@if($ff->hasmanysolutionimage()->get()->count())
									<table border="1">
												@foreach($ff->hasmanysolutionimage()->get() as $ffi)
										<tr>
											<td align="center">
												<img src="{!! asset('storage/'.$ffi->image) !!}" alt="" width="90%">
											</td>
										</tr>
												@endforeach
									</table>
									@else
										{!! 'No image' !!}
									@endif
								</td>
							</tr>
								@endforeach
						</table>

						<br />
@endif
						<table border="1">
							<tr>
								<th width="33%">Prepared by</th>
								<th width="33%">Reviewed by</th>
								<th width="34%">Approved by</th>
							</tr>
							<tr>
								<td height="70mm"></td>
								<td height="70mm"></td>
								<td height="70mm"></td>
							</tr>
							<tr>
								<td>
									{!! $fault->belongtostaff->name !!}<br />
									{!! \Carbon\Carbon::parse($fault->updated_at)->format('j F Y') !!}
								</td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</tbody>

		<tfoot>
			<tr>
				<td>
					<!--place holder for the fixed-position footer-->
					<div class="page-footer-space"></div>
				</td>
			</tr>
		</tfoot>

	</table>

</body>
</html>
