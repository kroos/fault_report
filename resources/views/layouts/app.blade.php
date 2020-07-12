<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name=description content="Content">
	<meta name=author content="Author">
	<title>{{ config('app.name') }}</title>
	<link href="{{ asset('images/maintenance.jpg') }}" type="image/x-icon" rel="icon" />
	<meta name="keywords" content="erp system, erp" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="d-flex flex-column">
	<div id="app">
		@include('layouts.nav')

		<main class="py-4">
			<div class="container-fluid">
				<div class="row justify-content-center">
					{{-- <div class="col-md-12 animated flipInY delay-5s"> --}}
					<div class="col-md-12">

						@yield('content')

					</div>
				</div>
			</div>
		</main>
	</div>


	<footer class="mt-auto  py-4 bg-dark text-white-50 ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div>
						<img src="{{ asset('images/logo-149x103.png') }}" class="img-fluid rounded" width="10%" alt="logo">
						<small>
							<span class="font-weight-bold">{{ config('app.name') }} - All Rights Reserved</span> <br>
							<span>&copy; Copyright {{ \Carbon\Carbon::now()->format('Y') }}</span>
						</small>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('js/ckeditor/adapters/jquery.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/ucwords.js') }}" ></script>

	<script type="text/javascript" src="{{ asset('js/datetime-moment.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/dataTable-any-number.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/select2-dropdownPosition.js') }}" ></script>

	@include('layouts.jscript')
</body>
</html>
