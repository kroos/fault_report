<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use App\Model\Building;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
// use App\Http\Requests\FaultRequest;

// load session
use Session;

// load array helper
// use Illuminate\Support\Arr;

class BuildingController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('building.index');
	}

	public function create()
	{
		return view('building.create');
	}

	public function store(Request $request)
	{
		Building::create($request->only('building'));
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('building.index'));
	}

	public function show(Building $building)
	{
	//
	}

	public function edit(Building $building)
	{
		return view('building.edit', compact(['building']));
	}

	public function update(Request $request, Building $building)
	{
		$building->update($request->only('building'));
		Session::flash('flash_message', 'Data successfully updated!');
		return redirect(route('building.index'));
	}

	public function destroy(Building $building)
	{
		// keja delete tp kita buat update
		$building->delete();
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

}
