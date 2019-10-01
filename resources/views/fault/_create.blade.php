<div class="form-group row {{ $errors->has('image') ? ' has-error' : '' }}">
	{{ Form::label( 'image', 'Upload Image : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-auto">
		{{ Form::file( 'image[]', ['class' => 'form-control form-control-sm form-control-file', 'id' => 'image', 'placeholder' => 'Staff Image', 'multiple' => 'multiple']) }}
	</div>
</div>

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

<div class="form-group row {{ $errors->has('issue') ? 'has-error' : '' }}">
	{{ Form::label( 'iss', 'Findings/Problem/Issues : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::textarea('issue', @$value, ['class' => 'form-control form-control-sm', 'id' => 'iss', 'placeholder' => 'Findings/Problem/Issues', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row {{ $errors->has('solution') ? 'has-error' : '' }}">
	{{ Form::label( 'sol', 'Solution : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::textarea('solution', @$value, ['class' => 'form-control form-control-sm', 'id' => 'sol', 'placeholder' => 'Solution', 'autocomplete' => 'off']) }}
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