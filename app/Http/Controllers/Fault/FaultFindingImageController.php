<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultFindingImage;
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

class FaultFindingImageController extends Controller
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

	public function show(FaultFindingImage $faultFindingImage)
	{
	}

	public function edit(FaultFindingImage $faultFindingImage)
	{
	}

	public function update(Request $request, FaultFindingImage $faultFindingImage)
	{
	}

	public function destroy(FaultFindingImage $faultFindingImage)
	{
		File::delete('/home/prpcdxws/public_html/'.$faultFindingImage->image);
		FaultFindingImage::destroy($faultFindingImage->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
