<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\Model\Template;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
use App\Http\Requests\TemplateRequest;

use \Carbon\Carbon;

use Illuminate\Support\Arr;

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

	public function store(TemplateRequest $request)
	{
		// dd($request->all());
		$template = \Auth::user()->belongtostaff->hasmanytemplate()->create(Arr::add($request->only(['title', 'system_id', 'description']), 'active', 1));
		if ($request->has('form')) {
			foreach ($request->form as $k1 => $v1) {
				$template->hasmanychecklist()->create([
					'input_type' => $v1['input_type'],
					'label' => $v1['label'],
					'active' => 1,
				]);
			}
		}
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('template.index'));
	}

	public function show(Template $template)
	{
//
	}

	public function edit(Template $template)
	{
//
	}

	public function update(Request $request, Template $template)
	{
//
	}

	public function destroy(Template $template)
	{
		// cant delete the template
		// Template::destroy($template->id);
		// $template->hasmanychecklist()->delete();

		$template->update(['active' => 0]);
		$template->hasmanychecklist()->update(['active' => 0]);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
