<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\FaultDocument;
use Illuminate\Http\Request;

// load image library
// use Intervention\Image\ImageManagerStatic as Image;

// load validation
// use App\Http\Requests\FaultRequest;

// load session
use Session;

// load array helper
// use Illuminate\Support\Arr;

// load file
use File;

class FaultDocumentController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		// $this->middleware('FaultDocumentCreator', ['only' => ['show', 'edit', 'update', 'destroy']]);
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

	public function show(FaultDocument $faultDoc)
	{
	}

	public function edit(FaultDocument $faultDoc)
	{
	}

	public function update(Request $request, FaultDocument $faultDoc)
	{
	}

	public function destroy(FaultDocument $faultDoc)
	{
		File::delete('/home/prpcdxws/public_html/'.$faultDoc->image);
		FaultDocument::destroy($faultDoc->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
