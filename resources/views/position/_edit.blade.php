<div class="card">
	<div class="card-header">
		Update Positions
	</div>
	<div class="card-body">

		<div class="form-group row {{ $errors->has('position') ? 'has-error' : '' }}">
			{{ Form::label( 'pos', 'Position : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{!! Form::text('position', @$value, ['class' => 'form-control form-control-sm', 'id' => 'pos', 'placeholder' => 'Position', 'autocomplete' => 'off']) !!}
			</div>
		</div>

		<div class="form-group row {{ $errors->has('system_role_id') ? 'has-error' : '' }}">
			{{ Form::label( 'sysroleid', 'System Role : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
			<div class="col-md-6">
				{{ Form::select('system_role_id', \App\Model\SystemRole::pluck('system_role', 'id')->sortKeys()->toArray(), @$value, ['class' => 'form-control form-control-sm', 'id' => 'sysroleid', 'placeholder' => 'System Role', 'autocomplete' => 'off']) }}
			</div>
		</div>

		<div class="form-group row mb-0">
			<div class="col-md-8 offset-md-4">
				{!! Form::button('Save', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
			</div>
		</div>

	</div>
</div>