<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultIssueImage;
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

class FaultIssueImageController extends Controller
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

	public function show(FaultIssueImage $faultIssueImage)
	{
	}

	public function edit(FaultIssueImage $faultIssueImage)
	{
	}

	public function update(Request $request, FaultIssueImage $faultIssueImage)
	{
	}

	public function destroy(FaultIssueImage $faultIssueImage)
	{
		File::delete('/home/prpcdxws/public_html/'.$faultIssueImage->image);
		FaultIssueImage::destroy($faultIssueImage->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
