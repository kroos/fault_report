<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultFinding;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
// use App\Http\Requests\FaultRequest;

// load session
use Session;

// load array helper
// use Illuminate\Support\Arr;

// load file
use File;

class FaultFindingController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		// $this->middleware('faultImageCreator', ['only' => ['show', 'edit', 'update', 'destroy']]);
	}

	public function index()
	{
	}

	public function create()
	{
	}

	public function store(Request $request)
	{
	}

	public function show(FaultFinding $faultFinding)
	{
	}

	public function edit(FaultFinding $faultFinding)
	{
	}

	public function update(Request $request, FaultFinding $faultFinding)
	{
	}

	public function destroy(FaultFinding $faultFinding)
	{
		FaultFinding::destroy($faultFinding->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
