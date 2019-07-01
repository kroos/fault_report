			<div class="form-group row {{ $errors->has('username') ? 'has-error' : '' }}">
				{{ Form::label( 'nam', 'RAPID Pass ID : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('username', @$value, ['class' => 'form-control', 'id' => 'nam', 'placeholder' => 'RAPID Pass ID', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
				{{ Form::label( 'pass1', 'Password : ', ['class' => 'col-4 col-form-label text-right'] ) }}
				<div class="col-6">
					{{ Form::password('password', ['class' => 'form-control', 'id' => 'pass1', 'placeholder' => 'Password', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
				{{ Form::label( 'pass2', 'Confirm Password : ', ['class' => 'col-4 col-form-label text-md-right'] ) }}
				<div class="col-6">
					{{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'pass2', 'placeholder' => 'Confirm Password', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
				{{ Form::label( 'nam', 'Name : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('name', @$value, ['class' => 'form-control', 'id' => 'nam', 'placeholder' => 'Name', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
				{{ Form::label( 'email', 'Email : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('email', @$value, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email', 'autocomplete' => 'off']) }}
				</div>
			</div>

			<div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
				{{ Form::label( 'ph', 'Phone : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::text('phone', @$value, ['class' => 'form-control', 'id' => 'ph', 'placeholder' => 'Phone', 'autocomplete' => 'off']) }}
				</div>
			</div>

<div class="form-group row mb-0">
	<div class="col-md-8 offset-md-4">
		{!! Form::button('Add New Member', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
	</div>
</div>