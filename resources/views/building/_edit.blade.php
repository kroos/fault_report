

<div class="form-group row {{ $errors->has('building') ? 'has-error' : '' }}">
	{{ Form::label( 'build', 'Building : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('building', @$value, ['class' => 'form-control', 'id' => 'build', 'placeholder' => 'Building', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row mb-0">
	<div class="col-md-8 offset-md-4">
		{!! Form::button('Save', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
	</div>
</div>