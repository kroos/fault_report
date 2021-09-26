<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultIssue;
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

class FaultIssueController extends Controller
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

	public function show(FaultIssue $faultIssue)
	{
	}

	public function edit(FaultIssue $faultIssue)
	{
	}

	public function update(Request $request, FaultIssue $faultIssue)
	{
	}

	public function destroy(FaultIssue $faultIssue)
	{
		FaultIssue::destroy($faultIssue->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
