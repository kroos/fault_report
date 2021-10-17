<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// use App\Model\Fault;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
// use App\Http\Requests\FaultRequest;

use \Carbon\Carbon;

// load session
use Session;

use File;

// load array helper
// use Illuminate\Support\Arr;

// load storage
// use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
		// $this->middleware( 'faultCreator', ['only' => [/*'show', 'edit', 'update',*/ 'destroy']] );
	}

	public function index()
	{
		return view('setting');
	}

	public function create()
	{

	}

	public function store(FaultRequest $request)
	{
	}

	public function show(Fault $fault)
	{

	}

	public function edit(Fault $fault)
	{

	}

	public function update(FaultRequest $request, Fault $fault)
	{

	}

	public function destroy(Fault $fault)
	{

	}
}