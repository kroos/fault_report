<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
// load validation
use App\Http\Requests\ChangePasswordRequest;

// load model
use \App\Model\Login;

use Session;

class UserChangePasswordController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'userChangePasswd']);
		// $this->middleware('auth');
	}

	public function edit(Login $login)
	{
		return view('auth.change_password', compact(['login']));
	}

	public function update(ChangePasswordRequest $request, Login $login)
	{
		$cp = \Auth::user()->update([
			'password' => bcrypt($request->password)
		]);
		Session::flash('flash_message', 'Data successfully update!');
		return redirect(route('main.index'));
	}

}
