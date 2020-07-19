<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\Model\Inspection;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
use App\Http\Requests\InspectionRequest;

use \Carbon\Carbon;

// load session
use Session;

use File;

// load array helper
// use Illuminate\Support\Arr;

class InspectionController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('checklist.index');
	}

	public function create()
	{
		return view('checklist.create');
	}

	public function store(InspectionRequest $request)
	{
		dd($request->all());
	}

	public function show(Inspection $inspection)
	{
//
	}

	public function edit(Inspection $inspection)
	{
//
	}

	public function update(InspectionRequest $request, Inspection $inspection)
	{
//
	}

	public function destroy(Inspection $inspection)
	{
//
	}
}
