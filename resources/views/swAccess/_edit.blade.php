<div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
	{{ Form::label( 'date', 'Date : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('date', @$value, ['class' => 'form-control form-control-sm', 'id' => 'date', 'placeholder' => 'Date', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row">
	{{ Form::label( 'syst', 'Requester : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-6">
		<div class="col pic_wrap">
<?php
$r1 = 1;
$r2 = 1;
$r3 = 1;
$r4 = 1;
$r5 = 1;
$r6 = 1;
$r7 = 1;
$r8 = 1;
$r9 = 1;
$r10 = 1;
$r11 = 1;
$r12 = 1;
$r13 = 1;
$r14 = 1;
?>
@foreach($swAccess->hasmanypic()->get() as $sp)
			<div class="rowpic">
				<div class="col-sm-12 form-row ">
					<div class="col-sm-1 text-danger">
						{!! Form::hidden('pic['.$r11++.'][id]', $sp->id) !!}
							<i class="fas fa-trash delete_pic" aria-hidden="true" data-id="{!! $sp->id !!}"></i>
					</div>
					<div class="form-group col {{ $errors->has('pic.*.swAccess_PIC') ? 'has-error' : NULL }}">
						<input name="pic[{!! $r1++ !!}][swAccess_PIC]" type="text" value="{!! $sp->swAccess_PIC !!}" class="form-control form-control-sm" id="oi_{!! $r2++ !!}" autocomplete="off" placeholder="Requester" />
					</div>
					<div class="form-group col {{ $errors->has('pic.*.email') ? 'has-error' : NULL }}">
						<input type="text" name="pic[{!! $r3++ !!}][email]" value="{!! $sp->email !!}" class="form-control form-control-sm" id="oiai_{!! $r4++ !!}" autocomplete="off" placeholder="Email" />
					</div>
				</div>
			</div>
@endforeach()
		</div>
		<div class="row col-lg-12 add_pic">
			<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add Requester</span>
		</div>
	</div>
</div>

<div class="form-group row {{ $errors->has('company') ? 'has-error' : '' }}">
	{{ Form::label( 'pri', 'Company : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('company', @$value, ['class' => 'form-control form-control-sm', 'id' => 'pri', 'placeholder' => 'Company', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row {{ $errors->has('subject') ? 'has-error' : '' }}">
	{{ Form::label( 'dateline', 'Subject : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('subject', @$value, ['class' => 'form-control form-control-sm', 'id' => 'dateline', 'placeholder' => 'Subject', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row">
	{{ Form::label( 'syst', 'Permit To Work : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-6">
		<div class="col ptw_wrap">
@foreach($swAccess->hasmanyptw()->get() as $st)
			<div class="rowptw">
				<div class="col-sm-12 form-row ">
					<div class="col-sm-1 text-danger">
						{!! Form::hidden('ptw['.$r12++.'][id]', $st->id) !!}
							<i class="fas fa-trash delete_ptw" aria-hidden="true" data-id="{!! $st->id !!}"></i>
					</div>
					<div class="form-group col {{ $errors->has('ptw.*.swAccess_PTW') ? 'has-error' : NULL }}">
						<input name="ptw[{!! $r5++ !!}][swAccess_PTW]" type="text" value="{!! $st->swAccess_PTW !!}" class="form-control form-control-sm" id="ptw_{!! $r6++ !!}" autocomplete="off" placeholder="PTW No" />
					</div>
				</div>
			</div>
@endforeach()
		</div>
		<div class="row col-lg-12 add_ptw">
			<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add PTW</span>
		</div>
	</div>
</div>

<div class="form-group row {{ $errors->has('request_start') ? 'has-error' : '' }}">
	{{ Form::label( 'subsystem', 'Request Start Date : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('request_start', @$value, ['class' => 'form-control form-control-sm', 'id' => 'subsystem', 'placeholder' => 'Request Start Date', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row {{ $errors->has('request_end') ? 'has-error' : '' }}">
	{{ Form::label( 'subsystem1', 'Request End Date : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('request_end', @$value, ['class' => 'form-control form-control-sm', 'id' => 'subsystem1', 'placeholder' => 'Request End Date', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row">
	{{ Form::label( 'syst', 'Switch : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		<div class="col switch_wrap">

@foreach($swAccess->belongtomanyswitch()->get() as $ss)

			<div class="rowswitch">
				<div class="col-sm-12 form-row">
					<div class="col-sm-1 text-danger">
							<i class="fas fa-trash delete_switch" aria-hidden="true" data-id="{{ $ss->pivot->id }}"></i>
					</div>

					<div class="form-group col {{ $errors->has('sw1.*.switch_id') ? 'has-error' : '' }}">
						<select name="sw1[{!! $r7++ !!}][switch_id]" id="ois_{!! $r8++ !!}" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
							<option value="">Please choose</option>
@foreach( \App\Model\Switches::all() as $mod )
							<option value="{!! $mod->id !!}" {{ ($mod->id == $ss->id)?'selected':NULL }}>{!! $mod->hostname !!}</option>
@endforeach
						</select>
					</div>
					<div class="form-group col {{ $errors->has('sw1.*.swtag_id') ? 'has-error' : '' }}">
						<select name="sw1[{!! $r9++ !!}][swtag_id]" id="sois_{!! $r10++ !!}" class="form-control form-control-sm" autocomplete="off" placeholder="Please choose">
							<option value="">Please choose</option>
@foreach( \App\Model\SwitchTag::all() as $mod1 )
							<option value="{!! $mod1->id !!}" class="{{ $mod1->switch_id }}" {{ ($mod1->id == $ss->pivot->swtag_id)?'selected':NULL }}>{!! $mod1->tag_number !!}</option>
@endforeach
						</select>
					</div>
				</div>
			</div>

@endforeach

		</div>
		<div class="row col-lg-12 add_switch">
			<span class="text-primary"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Add switch</span>
		</div>
	</div>
</div>

<div class="form-group row {{ $errors->has('access_start') ? 'has-error' : '' }}">
	{{ Form::label( 'subsystem2', 'Access Start Date : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('access_start', @$value, ['class' => 'form-control form-control-sm', 'id' => 'subsystem2', 'placeholder' => 'Access Start Date', 'autocomplete' => 'off']) }}
	</div>
</div>

<div class="form-group row {{ $errors->has('access_end') ? 'has-error' : '' }}">
	{{ Form::label( 'subsystem3', 'Access End Date : ', ['class' => 'col-md-4 col-form-label text-md-right'] ) }}
	<div class="col-md-6">
		{{ Form::text('access_end', @$value, ['class' => 'form-control form-control-sm', 'id' => 'subsystem3', 'placeholder' => 'Access End Date', 'autocomplete' => 'off']) }}
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