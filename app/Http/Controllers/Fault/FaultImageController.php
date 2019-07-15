<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultImage;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
// use App\Http\Requests\FaultRequest;

// load session
use Session;

// load array helper
// use Illuminate\Support\Arr;

class FaultImageController extends Controller
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

	public function show(FaultImage $faultImage)
	{
	}

	public function edit(FaultImage $faultImage)
	{
	}

	public function update(Request $request, FaultImage $faultImage)
	{
	}

	public function destroy(FaultImage $faultImage)
	{
		File::delete('/home/prpcdxws/public_html/'.$faultImage->image);
		FaultImage::destroy($faultImage->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
