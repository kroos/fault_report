<div class="form-group row {{ $errors->has('hostname') ? 'has-error' : '' }}">
	{{ Form::label( 'host', 'Hostname : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('hostname', @$value, ['class' => 'form-control form-control-sm', 'id' => 'host', 'placeholder' => 'Hostname', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row {{ $errors->has('ip_address') ? 'has-error' : '' }}">
	{{ Form::label( 'ip', 'IP Address : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('ip_address', @$value, ['class' => 'form-control form-control-sm', 'id' => 'ip', 'placeholder' => 'IP Address', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row">
	{{ Form::label( 'tn', 'Tag Switch : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		<div class="col ptw_wrap">
<?php
$a1 = 1;
$a2 = 1;
?>
@foreach($switch->hasmanyswtag()->get() as $k)
			<div class="rowptw">
				<div class="col-sm-12 form-row ">
					<div class="col-sm-1 text-danger">
							<i class="fas fa-trash delete_ptw" aria-hidden="true"  data-id="{!! $k->id !!}"></i>
					</div>
					<div class="form-group col {{ $errors->has('sw.*.tag_number') ? 'has-error' : NULL }}">
						{!! Form::hidden('sw['.$a2++.'][id]', $k->id) !!}
						{!! Form::text('sw['.$a1++.'][tag_number]', $k->tag_number, ['class' => 'form-control form-control-sm', 'id' => 'ip1', 'placeholder' => 'Tag Switch', 'autocomplete' => 'off']) !!}
					</div>
				</div>
			</div>
@endforeach
		</div>
		<div class="row col-lg-12 add_ptw">
			<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Tag Switch</span>
		</div>	</div>
</div>

<div class="form-group row mb-0">
	<div class="col-md-8 offset-md-4">
		{!! Form::button('Update', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
	</div>
</div>