<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\Model\Inspection;
use App\Model\InspectionAttendee;
use App\Model\InspectionChecklist;
use App\Model\InspectionImage;
use App\Model\InspectionDocument;
use App\Model\InspectionReviewed;
use App\Model\InspectionApproved;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
use App\Http\Requests\InspectionRequest;
use App\Http\Requests\InspectionReviewRequest;
use App\Http\Requests\InspectionApproveRequest;

use \Carbon\Carbon;

use Illuminate\Support\Arr;

use Calendar;

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
		$events = Inspection::where('active', 1)->get();
		$calendar = \Calendar::addEvents($events)
		->setOptions([ //set fullcalendar options
			'isAllDay' => false,
			'displayEventTime' => false,
		]);
		return view('checklist.index', compact('calendar'));
	}

	public function create()
	{
		return view('checklist.create');
	}

	public function store(InspectionRequest $request)
	{
		// dd($request->all());
		// dd($request->image, $request->file('image.*.input'), $request->has('image.*.input'));

		$insp = \Auth::user()->belongtostaff->hasmanyinspection()->create(Arr::add($request->only(['ticket_tracking_id', 'title', 'tag', 'date', 'building', 'system_id', 'remarks', 'ready']), 'active', 1));

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

		if ($request->file('image.*.input')) {
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

		if ($request->file('doc.*.input')) {
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
		return view('checklist.edit', compact(['inspection']));
	}

	public function update(InspectionRequest $request, Inspection $inspection)
	{
		// dd($request->all());
		$inspection->update( $request->only(['ticket_tracking_id', 'title', 'tag', 'date', 'building', 'system_id', 'remarks', 'ready']) );

		if ($request->has('attd')) {
			foreach($request->attd as $k => $v){
				InspectionAttendee::updateOrCreate(
					['id' => $v['id']],
					[
						'inspection_id' => $inspection->id,
						'attendees_id' => $v['attendees_id']
					]);
			}
		}

		if ($request->has('form')) {
			foreach($request->form as $k => $v){
				InspectionChecklist::updateOrCreate(
					['id' => $v['id']],
					[
					'inspection_id' => $inspection->id,
					'input' => $v['input'],
					'label' => $v['label'],
					'input_type' => $v['input_type'],
					'remarks' => $v['remarks'],
				]);
			}
		}

		if ($request->file('image.*.input')) {
			foreach($request->image as $k => $v){
				InspectionImage::UpdateOrCreate(
				// $inspection->hasmanyinspimage()->create(
					['id' => $v['id']],
					[
					'inspection_id' => $inspection->id,
					'input' => $v['input']->store('public/images/inspection/images'),
					'label' => $v['label'],
					'original_name' => $v['input']->getClientOriginalName(),
					'input_type' => $v['input_type'],
					'remarks' => $v['remarks'],
				]);
				File::move(storage_path('app/'.$v['input']->store('public/images/inspection/images')), '/home/prpcdxws/public_html/'.$v['input']->store('public/images/inspection/images'));
			}
		}

		if ($request->file('doc.*.input')) {
			foreach($request->doc as $k => $v){
				InspectionDocument::UpdateOrCreate(
				// $inspection->hasmanyinspdoc()->create(
					['id' => $v['id']],
					[
					'inspection_id' => $inspection->id,
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

	public function updatereview(InspectionReviewRequest $request, Inspection $inspection)
	{
		// dd($request->all());
		if ($request->reviewed === 'false') {		// harey... rupanya benda ni string...
			$inspection->update([
				'ready' => NULL
			]);
		} else {
			$inspection->update( ['reviewed' => 1] );
		}

		InspectionReviewed::create( \Arr::add(\Arr::add($request->only(['comments']), 'reviewed_id', \Auth::user()->id), 'inspection_id', $inspection->id) );
		return response()->json([
			'message' => 'Done Review',
			'status' => 'success'
		]);
	}

	public function updateapprove(InspectionApproveRequest $request, Inspection $inspection)
	{
		// dd($request->all());
		if ($request->approved === 'false') {		// harey... rupanya benda ni string...
			$inspection->update([
				'ready' => NULL,
				'reviewed' =>NULL
			]);
		} else {
			$inspection->update( ['approved' => 1] );
		}

		InspectionApproved::create( \Arr::add(\Arr::add($request->only(['comments']), 'approved_id', \Auth::user()->id), 'inspection_id', $inspection->id) );
		return response()->json([
			'message' => 'Done Approved',
			'status' => 'success'
		]);
	}

	public function destroy(Inspection $inspection)
	{
		$inspection->hasmanyinspattendees()->delete();
		$inspection->hasmanyinspchecklist()->delete();
		if($inspection->hasmanyinspimage()->count()){
			foreach ($inspection->hasmanyinspimage()->get() as $k => $v) {
				File::delete('/home/prpcdxws/public_html/'.$v['input']);
				// echo '/home/prpcdxws/public_html/'.$v['input'];
			}
		}
		$inspection->hasmanyinspimage()->delete();
		if($inspection->hasmanyinspdoc()->count()){
			foreach ($inspection->hasmanyinspdoc()->get() as $k => $v) {
				File::delete('/home/prpcdxws/public_html/'.$v['input']);
				// echo '/home/prpcdxws/public_html/'.$v['input'];
			}
		}
		$inspection->hasmanyinspdoc()->delete();
		Inspection::destroy($inspection->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
