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
		// dd($request->all());
		$fault = \Auth::user()->belongtostaff->hasmanyfault()->create(\Arr::add(\Arr::add($request->only(['title', 'ticket_id', 'dateline', 'building_id', 'priority_id', 'status_id', 'subsystem', 'issue', 'solution']), 'active', 1), 'date', Carbon::parse($request->date)->format('Y-m-d H:i:s')));

		if( $request->has('ffind') ) {
			foreach( $request->ffind as $k1 => $v1 ) {
				// echo $v1['finding'].' => '.$k1.' </br>';
				$ffind = $fault->hasmanyfaultfinding()->create([
							'finding' => $v1['finding'],
						]);
				// dd($request->file('ffind.*.image.*'));
				// dd($k1);
				// dd($v1);
				// if( $request->has('ffind.*.image') ){
				if( \Arr::has($v1, 'image') ){
					foreach($v1['image'] as $y1) {
						// echo 'success</br>';

						$filename = $y1->store('public/images/fault');
						// $extension = $y1->getClientOriginalExtension();
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

						$ffind->hasmanyfindingimage()->create([
							'image' => $image
						]);
						// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\fault_report/'.$filename);
						// File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
						// public_html/storage/images/fault
					}
				} else {}
			}
		}

		if( $request->has('fissu') ) {
			foreach( $request->fissu as $k1 => $v1 ) {
				// echo $v1['issue'].' => '.$k1.' </br>';
				$fissu = $fault->hasmanyfaultissue()->create([
							'issue' => $v1['issue'],
						]);
				// dd($request->file('fissu.*.image.*'));
				// dd($v1['image']);
				// if( $request->has('fissu.*.image') ){
				if( \Arr::has($v1, 'image') ){
					foreach($v1['image'] as $y1) {
						// echo 'success</br>';

						$filename = $y1->store('public/images/fault');
						// $extension = $y1->getClientOriginalExtension();
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

						$fissu->hasmanyissueimage()->create([
							'image' => $image
						]);
						// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\fault_report/'.$filename);
						// File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
						// public_html/storage/images/fault

					}
				}
			}
		}

		if( $request->has('fsolu') ) {
			foreach( $request->fsolu as $k1 => $v1 ) {
				// echo $v1['issue'].' => '.$k1.' </br>';
				$fsolu = $fault->hasmanyfaultsolution()->create([
							'solution' => $v1['solution'],
						]);
				// dd($request->file('fsolu.*.image.*'));
				// dd($v1['image']);
				// if( $request->has('fsolu.*.image') ){
				if( \Arr::has($v1, 'image') ){
					foreach($v1['image'] as $y1) {
						// echo 'success</br>';

						$filename = $y1->store('public/images/fault');
						// $extension = $y1->getClientOriginalExtension();
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

						$fsolu->hasmanysolutionimage()->create([
							'image' => $image
						]);
						// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\fault_report/'.$filename);
						// File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
						// public_html/storage/images/fault

					}
				}
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
		// if ($request->file('doc')) {
		// 	foreach($request->file('doc') as $k){
		// 		$fault->hasmanyfaultdoc()->create([
		// 			'doc' => $k->store('public/images/fault/documents'),
		// 			'original_name' => $k->getClientOriginalName(),
		// 		]);
		// 		File::move(storage_path('app/'.$k->store('public/images/fault/documents')), '/home/prpcdxws/public_html/'.$k->store('public/images/fault/documents'));
		// 	}
		// }

// echo storage_path('app/');
// die();
		// dd($request->image);
		// if ($request->has('image')) {
		// 	foreach ($request->file('image') as $v3) {
		// 		$filename = $v3->store('public/images/fault');
		// 		// $extension = $v3->getClientOriginalExtension();
		// 		$ass1 = explode('/', $filename);
		// 		$ass2 = array_except($ass1, ['0']);
		// 		$image = implode('/', $ass2);

		// 		$imag = Image::make(storage_path('app/'.$filename));
		// 		// $imag = Image::make( 'C:\Users\User\Desktop\image\fault' );

		// 		// resize the image to a height of 400 and constrain aspect ratio (auto width)
		// 		$imag->resize(NULL, 800, function ($constraint) {
		// 			$constraint->aspectRatio();
		// 		});

		// 		// convert all image to jpg
		// 		// $imag->encode('jpg', 75);

		// 		$imag->save();

		// 		$fault->hasmanyimage()->create([
		// 			'image' => $image
		// 		]);
		// 		// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
		// 		// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
		// 		File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
		// 		// public_html/storage/images/fault
		// 	}
		// }
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
		// dd( \Arr::add($request->only(['title', 'ticket_id', 'dateline', 'building_id', 'subsystem', 'issue', 'solution', 'status_id']), 'date', Carbon::parse($request->date)->format('Y-m-d H:i:s'), 'title', 'ticket_id', 'date') );
		// dd( $request->all() );
		// dd( $request->has('ffind') );
		// dd( $request->ffind );
		// dd( \Arr::except($request->ffind, ['image']) );

		$fcont = $fault->update( \Arr::add($request->only(['title', 'ticket_id', 'dateline', 'building_id', 'subsystem', 'issue', 'solution', 'status_id']), 'date', Carbon::parse($request->date)->format('Y-m-d H:i:s')) );
		// dd($fcont);

// dd($request->all());

		if($request->has('ffind')) {
			foreach ($request->ffind as $k1 => $v1) {
				// dd(\Arr::except($v1, ['image']));
				// $ffind = $fault->hasmanyfaultfinding()->updateOrCreate(
				$ffind = $fault->hasmanyfaultfinding()->updateOrCreate(
					\Arr::except($v1, ['image'])
					// [
					// 	'id' => $v1['id'],
					// 	'fault_id' => $v1['fault_id']
					// ],[
					// 	'finding' => $v1['finding'],
					// ]
				);

				if( isset($v1['image']) ){
					foreach($v1['image'] as $y1) {
						// echo 'success</br>';

						$filename = $y1->store('public/images/fault');
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

						$ffind->hasmanyfindingimage()->create([
							'image' => $image
						]);
						// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
						// public_html/storage/images/fault

					}
				}
			}
		}

		if($request->has('fissu')) {
			foreach ($request->fissu as $k1 => $v1) {
				// $fissu = $fault->hasmanyfaultissue()->updateOrCreate(
				$fissu = $fault->hasmanyfaultissue()->updateOrCreate(
					\Arr::except($v1, ['image'])
					// [
					// 	'id' => $v1['id'],
					// 	'fault_id' => $v1['fault_id']
					// ],[
					// 	'issue' => $v1['issue'],
					// ]
				);

				if( isset($v1['image']) ){
					foreach($v1['image'] as $y1) {
						// echo 'success</br>';

						$filename = $y1->store('public/images/fault');
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

						$fissu->hasmanyissueimage()->create([
							'image' => $image
						]);
						// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
						// public_html/storage/images/fault

					}
				}
			}
		}

		if($request->has('fsolu')) {
			foreach ($request->fsolu as $k1 => $v1) {
				$fsolu = $fault->hasmanyfaultsolution()->updateOrCreate(
					\Arr::except($v1, ['image'])
					// [
					// 	'id' => $v1['id'],
					// 	'fault_id' => $v1['fault_id']
					// ],[
					// 	'solution' => $v1['solution'],
					// ]
				);

				if( isset($v1['image']) ){
					foreach($v1['image'] as $y1) {
						// echo 'success</br>';

						$filename = $y1->store('public/images/fault');
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

						$fsolu->hasmanysolutionimage()->create([
							'image' => $image
						]);
						// Storage::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						// File::move(storage_path('app/'.$filename), 'C:\Users\User\Desktop\html/'.$filename);
						File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
						// public_html/storage/images/fault

					}
				}
			}
		}

		// if ($request->hasfile('doc')) {
		// 	foreach($request->file('doc') as $kv){
		// 		$fault->hasmanyfaultdoc()->create([
		// 			'doc' => $kv->store('public/images/fault/documents'),
		// 			'original_name' => $kv->getClientOriginalName(),
		// 		]);
		// 		File::move(storage_path('app/'.$kv->store('public/images/fault/documents')), $kv->store('public/images/fault/documents'));
		// 		// File::move(storage_path('app/'.$kv->store('public/images/fault/documents')), '/home/prpcdxws/public_html/'.$kv->store('public/images/fault/documents'));
		// 	}
		// }

		// if ($request->has('image')) {
		// 	foreach($request->file('image') as $k6){

		// 		$filename = $k6->store('public/images/fault');
		// 		// $extension = $v3->getClientOriginalExtension();
		// 		$ass3 = explode('/', $filename);
		// 		$ass4 = array_except($ass3, ['0']);
		// 		$image = implode('/', $ass4);

		// 		$imag = Image::make(storage_path('app/'.$filename));

		// 		// resize the image to a height of 400 and constrain aspect ratio (auto width)
		// 		$imag->resize(NULL, 800, function ($constraint) {
		// 			$constraint->aspectRatio();
		// 		});

		// 		// convert all image to jpg
		// 		// $imag->encode('jpg', 75);
		// 		$imag->save();

		// 		// $fault->hasmanyimage()->updateOrCreate([
		// 		$fault->hasmanyimage()->create(['image' => $image]);
		// 		File::move(storage_path('app/'.$filename), '/home/prpcdxws/public_html/'.$filename);
		// 	}
		// }

		if ($request->has('syst')) {
			foreach($request->syst as $k5 => $v5) {
				$syst[] = $v5['system_id'];
			}
			$fault->belongtomanysystem()->sync( $syst );
		};

		if ($request->has('dtag')) {
			// $fault->hasmanydevicetag()->updateOrCreate($request->dtag);
			foreach($request->dtag as $k8 => $v8) {
				// $fault->hasmanydevicetag()->updateOrCreate(				// cant use this one.. must use firstOrCreate
				$fault->hasmanydevicetag()->firstOrCreate(
					// [
					// 	'id' => $v8['id'],
					// ],
					[
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

	public function showpdf(Fault $fault)
	{
		return view('fault.showpdf', compact(['fault']));
	}
}
