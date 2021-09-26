<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultSolution;
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

class FaultSolutionController extends Controller
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

	public function show(FaultSolution $faultSolution)
	{
	}

	public function edit(FaultSolution $faultSolution)
	{
	}

	public function update(Request $request, FaultSolution $faultSolution)
	{
	}

	public function destroy(FaultSolution $faultSolution)
	{
		File::delete('/home/prpcdxws/public_html/'.$faultSolution->image);
		FaultSolution::destroy($faultSolution->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
