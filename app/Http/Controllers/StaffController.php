<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Model\Staff;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
// use App\Http\Requests\FaultRequest;

// load session
use Session;

// load array helper
use Illuminate\Support\Arr;

class StaffController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('staff.index');
	}

	public function create()
	{
		return view('staff.create');
	}

	public function store(Request $request)
	{
		$st = Staff::create(Arr::add($request->only(['name', 'email', 'phone']), 'active', 1));
		$st->hasmanylogin()->create( Arr::add(Arr::add($request->only(['username']), 'active', 1), 'password', bcrypt($request->password)) );
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('main.index'));
	}

	public function show(Staff $staff)
	{
	}

	public function edit(Staff $staff)
	{
	}

	public function update(Request $request, Staff $staff)
	{
	}

	public function destroy(Staff $staff)
	{
	}

}
