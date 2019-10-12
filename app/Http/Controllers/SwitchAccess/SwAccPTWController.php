<?php

namespace App\Http\Controllers\SwitchAccess;

use App\Http\Controllers\Controller;

use App\Model\SwAccessPTW;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
// use App\Http\Requests\SwAccessRequest;

use \Carbon\Carbon;

// load session
use Session;

use File;

// load array helper
use Illuminate\Support\Arr;

// load storage
// use Illuminate\Support\Facades\Storage;

class SwAccPTWController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
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

	public function show(SwAccessPTW $swAccPTW)
	{
	}

	public function edit(SwAccessPTW $swAccPTW)
	{
	}

	public function update(SwAccessRequest $request, SwAccessPTW $swAccPTW)
	{
	}

	public function destroy(SwAccessPTW $swAccPTW)
	{
		SwAccessPTW::destroy($swAccPTW->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

}
