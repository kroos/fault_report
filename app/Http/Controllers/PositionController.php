<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Model\Position;
use Illuminate\Http\Request;

// load image library
// use Intervention\Image\ImageManagerStatic as Image;

// load validation
use App\Http\Requests\PositionRequest;

// use \Carbon\Carbon;

// load session
use Session;

// use File;

// load array helper
// use Illuminate\Support\Arr;

// load storage
// use Illuminate\Support\Facades\Storage;

class PositionController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'isAdmin']);
		// $this->middleware( 'faultCreator', ['only' => [/*'show', 'edit', 'update',*/ 'destroy']] );
	}

	public function index()
	{
		return view('position.index');
	}

	public function create()
	{
		return view('position.create');
	}

	public function store(PositionRequest $request)
	{
		Position::create($request->only(['position', 'system_role_id']));
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('position.index'));
	}

	public function show(Position $position)
	{
	}

	public function edit(Position $position)
	{
		return view('position.edit', compact(['position']));
	}

	public function update(PositionRequest $request, Position $position)
	{
		$position->update($request->only(['position', 'system_role_id']));
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('position.index'));
	}

	public function destroy(Position $position)
	{
		$position->delete();
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}