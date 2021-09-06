<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

// load emailer
use Illuminate\Support\Facades\Mail;
use App\Mail\SendResetPasswordLink;

// load validation
use App\Http\Requests\SendLinkPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;

// load model
use App\Model\Login;
use App\Model\Staff;
use App\Model\PasswordReset;

// load session
use Session;

// load calendar
// use Calendar;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	public function index()
	{

$events = [];

$events[] = \Calendar::event(
    'Event One', //event title
    false, //full day event?
    '2020-02-11T0800', //start time (you can also use Carbon instead of DateTime)
    '2020-02-12T0800', //end time (you can also use Carbon instead of DateTime)
	0 //optionally, you can specify an event ID
);

$calendar = \Calendar::event(
// $events[] = \Calendar::event(
    "Valentine's Day", //event title
    true, //full day event?
    new \DateTime('2020-02-14'), //start time (you can also use Carbon instead of DateTime)
    new \DateTime('2020-02-14'), //end time (you can also use Carbon instead of DateTime)
	'stringEventId' //optionally, you can specify an event ID
);

// $eloquentEvent = EventModel::first(); //EventModel implements LaravelFullcalendar\Event

$calendar = \Calendar::addEvents($events); //add an array with addEvents
    // ->addEvent($eloquentEvent, [ //set custom color fo this event
    //     'color' => '#800',
    // ])
 //    ->setOptions([ //set fullcalendar options
	// 	'firstDay' => 1
	// ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
 //        'viewRender' => 'function() {alert("Callbacks!");}'
 //    ]);

// return view('hello', compact('calendar'));

// dd($calendar);
		return view('welcome', compact('calendar'));
	}

	public function login()
	{
		return view('auth.login');
	}

	public function authenticate(Request $request)
	{
		// print_r($request->all());
		// die();
		$remember_me = $request->has('remember') ? true : false;
		// attempt to authenticate the user
		if (!Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1], $remember_me)) {	// remember me only need value true or false
			Session::flash('flash_message', 'Please check your credential');
			return back();
		}
		return redirect(route('main.index'));										// redirect back to original route
	}

	public function logout()
	{
		// logout
		Auth::logout();
		return redirect(route('home'));
	}

	public function forgot_password()
	{
		// return view('auth.forgot_password');
		return view('auth.forgot_password');
	}

	public function retrieve_password(SendLinkPasswordRequest $request)
	{
		$token = Str::random(32);
		$email = $request->email;
		$emailer = Staff::where('email', $request->email);
		if($emailer->get()->count() == 1) {

			PasswordReset::create([
				'email' => $email,
				'token' => $token,
			]);

			$name = $emailer->first()->name;

			$mailer = Mail::to($email, $name)->send(new SendResetPasswordLink($token));
			Session::flash('flash_message', 'Email Sent!');
			return redirect( route('home') );

		} else {
			Session::flash('flash_message', 'Sorry, '.$request->email.' does not exist in our database.');
			return back();
		}
	}

	public function reset_password(Request $request, PasswordReset $passwordReset)
	{
		// echo $request->token;
		$token = $request->token;
		$tok = PasswordReset::where('token', $token);
		if($tok->count() == 1){
			return view('auth.reset_password');
		} else {
			return redirect(route('home'));
		}
	}

	public function reset_pass(ResetPasswordRequest $request)
	{
		$id = Staff::where('email', $request->email)->first()->id;
		$upd = Login::findOrFail($id);
		$upd->update([
			'password' => bcrypt($request->password)
		]);
		Session::flash('flash_message', 'Success reset password, You can login with your new password.');
		return redirect(route('home'));
	}
}

// $2y$10$MTZx7Z.mo2FESLPL3XAjWOEJph369Z2tO7vjRgUArhmN2yOJ84l5y