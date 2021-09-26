<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultSolutionImage;
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

class FaultSolutionImageController extends Controller
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

	public function show(FaultSolutionImage $faultSolutionImage)
	{
	}

	public function edit(FaultSolutionImage $faultSolutionImage)
	{
	}

	public function update(Request $request, FaultSolutionImage $faultSolutionImage)
	{
	}

	public function destroy(FaultSolutionImage $faultSolutionImage)
	{
		File::delete('/home/prpcdxws/public_html/'.$faultSolutionImage->image);
		FaultSolutionImage::destroy($faultSolutionImage->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
