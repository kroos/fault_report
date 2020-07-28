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
		// dd($request->all());
		// dd($request->image, $request->file('image.*.input'), /*$request->file('image.*.input')->*/);

		$insp = \Auth::user()->belongtostaff->hasmanyinspection()->create($request->only(['title', 'tag', 'date', 'building', 'system_id', 'remarks']));

		if ($request->has('attd')) {
			foreach($request->attd as $k => $v){
				$insp->hasmanyinspattendees()->create([
					'attendees_id' => $v['attendees_id']
				]);
			}
		}

		if ($request->has('form')) {
			foreach($request->form as $k => $v){
				$insp->hasmanyinspchecklist()->create([
					'input' => $v['input'],
					'label' => $v['label'],
					'input_type' => $v['input_type'],
					'remarks' => $v['remarks'],
				]);
			}
		}

		if ($request->has('image')) {
			foreach($request->image as $k => $v){
				$insp->hasmanyinspimage()->create([
					'input' => $v['input']->store('public/images/inspection/images'),
					'label' => $v['label'],
					'original_name' => $v['input']->getClientOriginalName(),
					'input_type' => $v['input_type'],
					'remarks' => $v['remarks'],
				]);
				File::move(storage_path('app/'.$v['input']->store('public/images/inspection/images')), '/home/prpcdxws/public_html/'.$v['input']->store('public/images/inspection/images'));
			}
		}

		if ($request->has('doc')) {
			foreach($request->doc as $k => $v){
				$insp->hasmanyinspdoc()->create([
					'input' => $v['input']->store('public/images/inspection/documents'),
					'label' => $v['label'],
					'original_name' => $v['input']->getClientOriginalName(),
					'input_type' => $v['input_type'],
					'remarks' => $v['remarks'],
				]);
				File::move(storage_path('app/'.$v['input']->store('public/images/inspection/documents')), '/home/prpcdxws/public_html/'.$v['input']->store('public/images/inspection/documents'));
			}
		}
        Session::flash('flash_message', 'Data successfully inserted!');
        return redirect( route('inspection.index') );
	}

	public function show(Inspection $inspection)
	{
		return view('checklist.show', compact(['inspection']));
	}

	public function showpdf(Inspection $inspection)
	{
		return view('checklist.showpdf', compact(['inspection']));
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
