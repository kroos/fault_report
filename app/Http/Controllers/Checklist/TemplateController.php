<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\Model\Template;

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

class TemplateController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('checklist.template.index');
	}

	public function create()
	{
		return view('checklist.template.create');
	}

	public function store(Request $request)
	{
		// dd($request->all());
		$template = \Auth::user()->belongtostaff->hasmanytemplate()->create($request->only(['title', 'system_id', 'description']));
		if ($request->has('form')) {
			foreach ($request->form as $k1 => $v1) {
				$template->hasmanychecklist()->create([
					'form_type' => $v1['formtype'],
					'label' => $v1['label']
				]);
			}
		}
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('template.index'));
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
