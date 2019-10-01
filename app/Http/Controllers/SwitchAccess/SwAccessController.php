<?php

namespace App\Http\Controllers\SwitchAccess;

use App\Http\Controllers\Controller;

use App\Model\SwAccess;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
use App\Http\Requests\SwAccessRequest;

use \Carbon\Carbon;

// load session
use Session;

use File;

// load array helper
use Illuminate\Support\Arr;

// load storage
// use Illuminate\Support\Facades\Storage;

class SwAccessController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		// $this->middleware( 'faultCreator', ['only' => [/*'show', 'edit', 'update',*/ 'destroy']] );
	}

	public function index()
	{
		return view('swAccess.index');
	}

	public function create()
	{
		return view('swAccess.create');
	}

	public function store(FaultRequest $request)
	{

// die();
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('fault.index'));
	}

	public function show(Fault $fault)
	{
	//
	}

	public function edit(Fault $fault)
	{
		return view('fault.edit', compact(['fault']));
	}

	public function update(FaultRequest $request, Fault $fault)
	{

// die();
		Session::flash('flash_message', 'Data successfully Updated!');
		return redirect(route('fault.index'));
	}

	public function destroy(Fault $fault)
	{

	}

}
