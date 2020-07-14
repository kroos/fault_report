<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\Model\System;

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

class ChecklistController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('checklist.index');
	}

	public function create(Request $request)
	{
		return view('checklist.create');
	}

	public function store(Request $request)
	{
//
	}

	public function show($id)
	{
//
	}

	public function edit($id)
	{
//
	}

	public function update(Request $request, $id)
	{
//
	}

	public function destroy($id)
	{
//
	}
}
