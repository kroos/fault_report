<?php

namespace App\Http\Controllers\Fault;

use App\Http\Controllers\Controller;

use App\Model\Fault;
use Illuminate\Http\Request;

// load image library
use Intervention\Image\ImageManagerStatic as Image;

// load validation
use App\Http\Requests\FaultRequest;

use \Carbon\Carbon;

// load session
use Session;

use File;

// load array helper
// use Illuminate\Support\Arr;

// load storage
// use Illuminate\Support\Facades\Storage;

class FaultController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		// $this->middleware( 'faultCreator', ['only' => [/*'show', 'edit', 'update',*/ 'destroy']] );
	}

	public function index()
	{
		return view('fault.index');
	}

	public function create()
	{
		return view('fault.create');
	}

	public function store(FaultRequest $request)
	{
		print_r($request->all());
		$dl = Carbon::parse($request->date)->format('Y-m-d H:i:s');
		echo '<br/>'.$dl;
		$fault = \Auth::user()->belongtostaff->hasmanyfault()->create(\Arr::add(\Arr::add($request->only(['title', 'ticket_id', 'dateline', 'building_id', 'priority_id', 'status_id', 'subsystem', 'issue', 'solution']), 'active', 1), 'date', $dl));
// die();

		if ($request->file('doc')) {
			foreach($request->file('doc') as $k){
				$fault->hasmanyfaultdoc()->create([
					'doc' => $k->store('public/images/fault/documents'),
					'original_name' => $k->getClientOriginalName(),
				]);
				File::move(storage_path('app/'.$k->store('public/images/fault/documents')), '/home/prpcdxws/public_html/'.$k->store('public/images/fault/documents'));
			}
		}
		if ($request->has('syst')) {
			foreach ($request->syst as $k1 => $v1) {
				$fault->belongtomanysystem()->attach($v1['system_id']);
			}
		}
		if ($request->has('attd')) {
			foreach ($request->attd as $k2 => $v2) {
				$fault->belongtomanyattendees()->attach($v2['attendees_id']);
			}
		}
		if ($request->has('dtag')) {
			foreach ($request->dtag as $k4 => $v4) {
				$fault->hasmanydevicetag()->create([
					'device_tag' => $v4['device_tag']
				]);
			}
		}

// echo storage_path('app/');
// die();
		// dd($request->image);
		if ($request->has('image')) {
			foreach ($request->file('image') as $v3) {
				$filename = $v3->store('public/images/fault');
				// $extension = $v3->getClientOriginalExtension();
				$ass1 = explode('/', $filename);
				$ass2 = array_except($ass1, ['0']);
				$image = implode('/', $ass2);

				$imag = Image::make(storage_path('app/'.$filename));
				// $imag = Image::make( 'C:\Users\User\Desktop\image\fault' );

				// resize the image to a height of 400 and constrain aspect ratio (auto width)
				$imag->resize(NULL, 800, function ($constraint) {
					$constraint->aspectRatio();
				});

				// convert all image to jpg
				// $imag->encode('jpg', 75);

				$imag->save();

				$fault->hasmanyimage()->create([
					'image' => $image
				]);
				// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
				// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
				File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
				// public_html/storage/images/fault
			}
		}
// die();
		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('fault.index'));
	}

	public function show(Fault $fault)
	{
		return view('fault.show', compact(['fault']));
	}

	public function edit(Fault $fault)
	{
		return view('fault.edit', compact(['fault']));
	}

	public function update(FaultRequest $request, Fault $fault)
	{
		// print_r( $request->syst );
		// $user->roles()->updateExistingPivot($roleId, $attributes);
		$dl = Carbon::parse($request->date)->format('Y-m-d H:i:s');
		// echo '<br/>'.$dl;
		$fault->update( \Arr::add($request->only(['title', 'ticket_id', 'dateline', 'building_id', 'subsystem', 'issue', 'solution', 'status_id']), 'date', 'title', 'ticket_id', $dl) );
		$syst = [];
		if ($request->has('syst')) {
			foreach($request->syst as $k5 => $v5) {
				$syst[] = $v5['system_id'];
			}
			$fault->belongtomanysystem()->sync( $syst );
		};

		if ($request->file('doc')) {
			foreach($request->file('doc') as $k => $v){
				$fault->hasmanyfaultdoc()->create([
					'doc' => $v['doc']->store('public/images/fault/documents'),
					'original_name' => $v['doc']->getClientOriginalName(),
				]);
				File::move(storage_path('app/'.$v['doc']->store('public/images/fault/documents')), '/home/prpcdxws/public_html/'.$v['doc']->store('public/images/fault/documents'));
			}
		}

		if ($request->has('image')) {
			foreach($request->file('image') as $k6){

				$filename = $k6->store('public/images/fault');
				// $extension = $v3->getClientOriginalExtension();
				$ass3 = explode('/', $filename);
				$ass4 = array_except($ass3, ['0']);
				$image = implode('/', $ass4);

				$imag = Image::make(storage_path('app/'.$filename));

				// resize the image to a height of 400 and constrain aspect ratio (auto width)
				$imag->resize(NULL, 800, function ($constraint) {
					$constraint->aspectRatio();
				});

				// convert all image to jpg
				// $imag->encode('jpg', 75);
				$imag->save();

				// $fault->hasmanyimage()->updateOrCreate([
				$fault->hasmanyimage()->create(['image' => $image]);
				File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
			}
		}

		if ($request->has('dtag')) {
			foreach($request->dtag as $k8 => $v8) {
				$fault->hasmanydevicetag()->updateOrCreate(
					[
						'id' => $v8['id']
					],
					[
						// 'fault_id' => $fault->id,
						'device_tag' => $v8['device_tag']
					]
				);
			}
		};

		if($request->has('attd')){
			foreach ($request->attd as $k9 => $v9) {
				$attd[] = $v9['attendees_id'];
			}
			$fault->belongtomanyattendees()->sync( $attd );
		}

// die();
		Session::flash('flash_message', 'Data successfully Updated!');
		return redirect(route('fault.index'));
	}

	public function destroy(Fault $fault)
	{
		// keja delete tp kita buat update
		$fault->update([
			'active' => 0
		]);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

	public function deleteSystem(Request $request, Fault $fault)
	{
		$fault->belongtomanysystem()->detach($request->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

	public function deleteDeviceTag(Request $request, Fault $fault)
	{
		$fault->hasmanydevicetag()->where('id', $request->id)->delete();
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

	public function deleteAttendees(Request $request, Fault $fault)
	{
		$fault->belongtomanyattendees()->detach($request->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

}
