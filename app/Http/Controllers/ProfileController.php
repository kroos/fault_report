<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// load validation
// use App\Http\Requests\ChangePasswordRequest;

// load model
use \App\Model\Staff;

use Session;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('userChangeProfile', ['only' => ['show', 'edit', 'update', 'destroy']]);
	}

	public function edit(Staff $staff)
	{
		return view('profile', compact(['staff']));
	}

	public function update(Request $request, Staff $staff)
	{
		$cp = \Auth::user()->belongtostaff->update( $request->only(['email', 'phone']) );
		Session::flash('flash_message', 'Data successfully update!');
		return redirect(route('main.index'));
	}

}
