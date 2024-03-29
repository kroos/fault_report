@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header"><h1 class="card-title">Login</h1></div>
	<div class="card-body">
		@include('layouts.info')
		@include('layouts.errorform')

		<form method="POST" action="{{ route('authenticate') }}" id="form" autocomplete="off" enctype="multipart/form-data" aria-label="{{ __('Login') }}">
			@csrf

			<div class="form-group row">
				<label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('RAPID ID') }}</label>

				<div class="col-md-6">
					<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

					@if ($errors->has('username'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('username') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

				<div class="col-md-6">
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

					@if ($errors->has('password'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-6 offset-md-4">
					<div class="form-check">

						<div class="pretty p-switch p-fill">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<div class="state">
								<label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group row mb-0">
				<div class="col-md-8 offset-md-4">
					<button type="submit" class="btn btn-primary">
						{{ __('Login') }}
					</button>

					<a class="btn btn-link" href="{{ route('forgot_password') }}">
						{{ __('Forgot Your Password?') }}
					</a>
				</div>
			</div>
		</form>



	</div>
</div>
@endsection
