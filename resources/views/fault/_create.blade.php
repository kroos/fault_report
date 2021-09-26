<div class="row justify-content-center">
	<div class="col-md-6">

		<div class="form-group row {{ $errors->has('title') ? 'has-error' : '' }}">
			{{ Form::label( 'title', 'Title : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::text('title', @$value, ['class' => 'form-control form-control-sm', 'id' => 'title', 'placeholder' => 'Title', 'autocomplete' => 'off']) }}
			</div>
		</div>

		<div class="form-group row {{ $errors->has('ticket_id') ? 'has-error' : '' }}">
			{{ Form::label( 'ticket_id', 'Ticket ID : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::text('ticket_id', @$value, ['class' => 'form-control form-control-sm', 'id' => 'ticket_id', 'placeholder' => 'Ticket ID', 'autocomplete' => 'off']) }}
			</div>
		</div>

	</div>
	<div class="col-md-6">

		<div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
			{{ Form::label( 'date', 'Date : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::text('date', @$value, ['class' => 'form-control form-control-sm', 'id' => 'date', 'placeholder' => 'Date', 'autocomplete' => 'off']) }}
			</div>
		</div>

		<div class="form-group row {{ $errors->has('priority_id') ? 'has-error' : '' }}">
			{{ Form::label( 'pri', 'Priority : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::select('priority_id', \App\Model\Priority::pluck('priority', 'id')->sortKeys()->toArray(), @$value, ['class' => 'form-control form-control-sm', 'id' => 'pri', 'placeholder' => 'Priority', 'autocomplete' => 'off']) }}
			</div>
		</div>

		<div class="form-group row {{ $errors->has('dateline') ? 'has-error' : '' }}">
			{{ Form::label( 'dateline', 'Dateline : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::text('dateline', @$value, ['class' => 'form-control form-control-sm', 'id' => 'dateline', 'placeholder' => 'Dateline', 'autocomplete' => 'off']) }}
			</div>
		</div>

	</div>
</div>

<div class="row justify-content-center">
	<div class="col-md-6">

		<div class="form-group row {{ $errors->has('building_id') ? 'has-error' : '' }}">
			{{ Form::label( 'bid', 'Building : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::select('building_id', \App\Model\Building::pluck('building', 'id')->sortKeys()->toArray(), @$value, ['class' => 'form-control form-control-sm', 'id' => 'bid', 'placeholder' => 'Building', 'autocomplete' => 'off']) }}
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label( 'syst', 'System : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				<div class="col system_wrap">
					<div class="rowsystem">
						<div class="col-sm-12 form-row">
							<div class="col-sm-1 text-danger">
									<i class="fas fa-trash remove_system1" aria-hidden="true" id="delete_system_1"></i>
							</div>

							<div class="form-group col {{ $errors->has('syst.*.system_id') ? 'has-error' : '' }}">
								<select name="syst[1][system_id]" id="ois_1" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
									<option value="">Please choose</option>
		@foreach( \App\Model\System::all() as $mod )
									<option value="{!! $mod->id !!}" {{ ($mod->id == 0)?'selected':'' }}>{!! $mod->system !!}</option>
		@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row col-lg-12 add_system">
					<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add System</span>
				</div>
			</div>
		</div>

		<div class="form-group row {{ $errors->has('subsystem') ? 'has-error' : '' }}">
			{{ Form::label( 'subsystem', 'Subsystem (Keyword) : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::text('subsystem', @$value, ['class' => 'form-control form-control-sm', 'id' => 'subsystem', 'placeholder' => 'Subsystem (Keyword)', 'autocomplete' => 'off']) }}
			</div>
		</div>

		<div class="form-group row {{ $errors->has('subsystem') ? 'has-error' : '' }}">
			{{ Form::label( 'devtag_1', 'Device Tag : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				<div class="col dtag_wrap">
					<div class="rowdtag">
						<div class="col-sm-12 form-row">
							<div class="col-sm-1 text-danger">
								<i class="fas fa-trash remove_dtag1" aria-hidden="true" id="delete_dtag_1"></i>
							</div>
							<div class="form-group col {{ $errors->has('dtag.*.device_tag') ? 'has-error' : '' }}">
								<input type="text" name="dtag[1][device_tag]" id="devtag_1" class="form-control form-control-sm" placeholder="Device Tag" autocomplete="off">
							</div>
						</div>
					</div>
				</div>
				<div class="row col-lg-12 add_dtag">
					<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Device Tag</span>
				</div>
			</div>
		</div>

	</div>
	<div class="col-md-6">

		<div class="form-group row">
			{{ Form::label( 'attd', 'Attendees : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				<div class="col attd_wrap">
					<div class="rowattd">
						<div class="col-sm-12 form-row">
							<div class="col-sm-1 text-danger">
									<i class="fas fa-trash remove_attd1" aria-hidden="true" id="delete_attd_1"></i>
							</div>

							<div class="form-group col {{ $errors->has('attd.*.attendees_id') ? 'has-error' : '' }}">
								<select name="attd[1][attendees_id]" id="attd_1" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
									<option value="">Please choose</option>
		@foreach( \App\Model\Staff::where('active', 1)->get() as $mod )
									<option value="{!! $mod->id !!}" {{ ($mod->id == \Auth::user()->belongtostaff->id)?'selected':'' }}>{!! $mod->name !!}</option>
		@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row col-lg-12 add_attd">
					<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Attendees</span>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="form-group row">
	{{ Form::label( 'attd', 'Findings : ', ['class' => 'col-md-2 col-form-label text-md-right '] ) }}
	<div class="col-md-10 ">
		<div class="col ffind_wrap">
			<div class="rowffind">
				<div class="form-row">
					<div class="col-sm-1 text-danger">
						<i class="fas fa-trash remove_ffind" aria-hidden="true" id="delete_ffind_1"></i>
					</div>

					<div class="form-group col row {{ $errors->has('ffind.*.finding.*') ? 'has-error' : '' }}">
						<textarea class="form-control form-control-sm col-md-8" id="ffind_1" placeholder="Findings" autocomplete="off" name="ffind[1][finding]"></textarea>
						<input class="form-control form-control-sm form-control-file col-md-4" id="ffimage_1" placeholder="Finding Image" multiple="multiple" name="ffind[1][image][]" type="file">
					</div>
				</div>
			</div>
		</div>
		<div class="row col-md-12 add_ffind">
			<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Findings</span>
		</div>
	</div>
</div>

<div class="form-group row">
	{{ Form::label( 'attd', 'Issues : ', ['class' => 'col-md-2 col-form-label text-md-right '] ) }}
	<div class="col-md-10 ">
		<div class="col fissu_wrap">
			<div class="rowfissu">
				<div class="form-row">
					<div class="col-sm-1 text-danger">
						<i class="fas fa-trash remove_fissu" aria-hidden="true" id="delete_fissu_1"></i>
					</div>

					<div class="form-group col row {{ $errors->has('fissu.*.issue.*') ? 'has-error' : '' }}">
						<textarea class="form-control form-control-sm col-md-8" id="fissu_1" placeholder="Issues" autocomplete="off" name="fissu[1][issue]"></textarea>
						<input class="form-control form-control-sm form-control-file col-md-4" id="fiimage_1" placeholder="Issue Images" multiple="multiple" name="fissu[1][image][]" type="file">
					</div>
				</div>
			</div>
		</div>
		<div class="row col-md-12 add_fissu">
			<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Issues</span>
		</div>
	</div>
</div>

<div class="form-group row">
	{{ Form::label( 'attd', 'Solution : ', ['class' => 'col-md-2 col-form-label text-md-right '] ) }}
	<div class="col-md-10 ">
		<div class="col fsolu_wrap">
			<div class="rowfsolu">
				<div class="form-row">
					<div class="col-sm-1 text-danger">
						<i class="fas fa-trash remove_fsolu" aria-hidden="true" id="delete_fsolu_1"></i>
					</div>

					<div class="form-group col row {{ $errors->has('fsolu.*.solution.*') ? 'has-error' : '' }}">
						<textarea class="form-control form-control-sm col-md-8" id="fsolu_1" placeholder="Solution" autocomplete="off" name="fsolu[1][solution]"></textarea>
						<input class="form-control form-control-sm form-control-file col-md-4" id="fiimage_1" placeholder="Solution Images" multiple="multiple" name="fsolu[1][image][]" type="file">
					</div>
				</div>
			</div>
		</div>
		<div class="row col-md-12 add_fsolu">
			<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Solution</span>
		</div>
	</div>
</div>

<div class="form-group row {{ $errors->has('status_id') ? 'has-error' : '' }}">
	{{ Form::label( 'sta', 'Status : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
<?php
$w1=0;
$w2=0
?>
@foreach( \App\Model\Status::all() as $st )
		<div class="pretty p-switch">
			{{ Form::radio('status_id', $st->id, NULL, ['class' => 'form-check-input', 'id' => 'i'.$w1++]) }}
			<div class="state p-success">
				<label class="form-check-label" for="{!! 'i'.$w2++ !!}">{!! $st->status !!}</label>
			</div>
		</div>
@endforeach
	</div>
</div>

<div class="form-group row mb-0">
	<div class="col-md-8 offset-md-4">
		{!! Form::button('Save', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
	</div>
</div>