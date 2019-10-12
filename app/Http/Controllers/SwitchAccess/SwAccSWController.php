<?php

namespace App\Http\Controllers\SwitchAccess;

use App\Http\Controllers\Controller;

use App\Model\SwAccessSwitch;
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

class SwAccSWController extends Controller
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

	public function show(SwAccessSwitch $swAccSW)
	{
	}

	public function edit(SwAccessSwitch $swAccSW)
	{
	}

	public function update(SwAccessRequest $request, SwAccessSwitch $swAccSW)
	{
	}

	public function destroy(SwAccessSwitch $swAccSW)
	{
		SwAccessSwitch::destroy($swAccSW->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

}
