<?php
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use App\Model\Inspection;

?>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top navbar-laravel" style="background-color: #e3f2fd;">
	<div class="container">
		<a class="navbar-brand py-0" href="{{ url('/') }}">
			<img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" class="img-fluid rounded" width="10%">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav mr-auto"></ul>

			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
			@guest
				<li class="nav-item">
					<a class="nav-link py-0" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
			@else
<?php
if ( Auth::user()->staff_id == 3 || Auth::user()->staff_id == 6 || Auth::user()->staff_id == 7 ) {
	$ins1 = Inspection::where('ready', 1)->whereNull('reviewed')->count();
	$insrev = $ins1.'R';
} else {
	$insrev = NULL;
}

if ( Auth::user()->staff_id == 2 || Auth::user()->staff_id == 7 ) {
	$ins2 = Inspection::where([['ready', 1], ['reviewed', 1]])->whereNull('approved')->count();
	$insapp = $ins2.'A';
} else {
	$insapp = NULL;
}

if ( Auth::user()->staff_id != 2 || Auth::user()->staff_id != 7 ) {
	$ins3 = Auth::user()->belongtostaff->hasmanyinspection()->whereNull('ready')->whereNull('reviewed')->whereNull('approved')->count();
	$insready = $ins3.'Rd';
} else {
	$insready = NULL;
}



?>
				<li class="nav-item">
					<a class="nav-link py-0" href="{{ route('fault.index') }}">{{ __('Fault Report') }}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link py-0" href="{{ route('swAccess.index') }}">{{ __('Switches Access') }}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link py-0" href="{{ route('inspection.index') }}">{{ __('PPM Inspection Checklist') }}</a>
				</li>
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="btn btn-sm btn-info text-white nav-link dropdown-toggle py-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->belongtostaff->name }}
						<span class="badge badge-danger">{{ ((Auth::user()->staff_id != 2)?$insready:NULL).' '.((Auth::user()->staff_id != 2)?$insrev:NULL).' '.$insapp }}</span>
						<span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('profile.edit', \Auth::user()->belongtostaff->id) }}">{{ __('Profile') }}</a>
						<a class="dropdown-item" href="{{ route('change_password', \Auth::user()->id) }}">{{ __('Change Password') }}</a>
						<a class="dropdown-item" href="{{ route('setting.index') }}">{{ __('Setting') }}</a>

						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>

					</div>
				</li>
			@endguest
			</ul>
		</div>
	</div>
</nav>