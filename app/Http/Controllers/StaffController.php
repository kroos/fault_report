<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Model\Staff;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
use App\Http\Requests\StaffRequest;

// load session
use Session;

// load array helper
use Illuminate\Support\Arr;

class StaffController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'isAdmin'], ['except' => 'index']);
	}

	public function index()
	{
		return view('staff.index');
	}

	public function create()
	{
		return view('staff.create');
	}

	public function store(StaffRequest $request)
	{
		// dd($request->all());
		$st = Staff::create(Arr::add($request->only(['name', 'email', 'phone', 'position_id']), 'active', 1));
		$st->hasmanylogin()->create( Arr::add(Arr::add($request->only(['username']), 'active', 1), 'password', bcrypt($request->password)) );
		$st->belongtomanysystem()->attach($request->system_id);
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('setting.index'));
	}

	public function show(Staff $staff)
	{
	}

	public function edit(Staff $staff)
	{
		return view('staff.edit', compact(['staff']));
	}

	public function update(StaffRequest $request, Staff $staff)
	{
		// dd(!is_null($request->password_confirmation));
		$staff->update( $request->only(['name', 'email', 'phone', 'position_id']) );
		if( !is_null($request->password_confirmation) ) {
			$staff->hasmanylogin()->update(Arr::add(Arr::add($request->only(['username']), 'active', 1), 'password', bcrypt($request->password)));
		}
		$staff->belongtomanysystem()->sync($request->system_id);
		Session::flash('flash_message', 'Data successfully updated!');
		return redirect(route('setting.index'));
	}

	public function destroy(Staff $staff)
	{
		// dd($request->all());
		$staff->update([
			'active' => 0
		]);
		$staff->hasmanylogin()->update([
			'active' => 0
		]);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

	// delete system
	public function deleteSystem(Request $request, Staff $staff)
	{
		// dd($request->id);
		// dd($staff);
		$staff->belongtomanysystem()->detach($request->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
