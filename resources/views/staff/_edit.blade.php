			<div class="form-group row {{ $errors->has('username') ? 'has-error' : '' }}">
				{{ Form::label( 'nam', 'PIC ID : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{!! Form::text('username', $staff->hasmanylogin()->first()->username, ['class' => 'form-control', 'id' => 'nam', 'placeholder' => 'RAPID Pass ID', 'autocomplete' => 'off']) !!}
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

			<div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
				{{ Form::label( 'pos', 'Position : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					{{ Form::select('position_id', \App\Model\Position::pluck('position', 'id')->sortKeys()->toArray(), @$value, ['class' => 'form-control', 'id' => 'pos', 'placeholder' => 'Position']) }}
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label( 'sys', 'System Responsibility : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
				<div class="col-md-6">
					<div class="col system_wrap">
<?php
$e1 = 1;
$e2 = 1;
$e3 = 1;
?>
@foreach($staff->belongtomanysystem()->get() as $g1)
						<div class="rowsystem">
							<div class="col-sm-12 form-row">
								<div class="col-sm-1 text-danger">
										<i class="fas fa-trash delete_system" aria-hidden="true" id="delete_system_1" data-id="{!! $g1->id !!}"></i>
								</div>

								<div class="form-group col {{ $errors->has('system_id.*') ? 'has-error' : '' }}">
									<select name="system_id[{!! $e2++ !!}]" id="ois_{!! $e3++ !!}" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
										<option value="">Please choose</option>
			@foreach( \App\Model\System::all() as $mod )
										<option value="{!! $mod->id !!}" {{ ($mod->id == $g1->id)?'selected':NULL }}>{!! $mod->system !!}</option>
			@endforeach
									</select>
								</div>
							</div>
						</div>
@endforeach
					</div>
					<div class="row col-lg-12 add_system">
						<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add System</span>
					</div>

				</div>
			</div>

<div class="form-group row mb-0">
	<div class="col-md-8 offset-md-4">
		{!! Form::button('Update', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
	</div>
</div>