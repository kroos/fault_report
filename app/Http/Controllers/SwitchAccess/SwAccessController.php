<?php

namespace App\Http\Controllers\SwitchAccess;

use App\Http\Controllers\Controller;

use App\Model\SwitchAccess;
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

	public function store(SwAccessRequest $request)
	{
		print_r($request->all());
		$sw = \Auth::user()->belongtostaff->hasmanyswaccess()->create($request->only(['date', 'company', 'subject', 'request_start', 'request_end', 'access_start', 'access_end', 'status_id']));
		if ($request->has('pic')) {
			foreach ($request->pic as $k1 => $v1) {
				$sw->hasmanypic()->create([
					'swAccess_PIC' => $v1['swAccess_PIC'],
					'email' => $v1['email']
				]);
			}
		}
		if ($request->has('ptw')) {
			foreach ($request->ptw as $k2 => $v2) {
				$sw->hasmanyptw()->create([
					'swAccess_PTW' => $v2['swAccess_PTW']
				]);
			}
		}
		if ($request->has('sw1')) {
			foreach ($request->sw1 as $k3 => $v3) {
				$sw->belongtomanyswitch()->attach(
					$v3['switch_id'],
					['swtag_id' => $v3['swtag_id']]
				);
			}
		}

		Session::flash('flash_message', 'Data successfully stored!');
		return redirect(route('swAccess.index'));
	}

	public function show(SwitchAccess $swAccess)
	{
	//
	}

	public function edit(SwitchAccess $swAccess)
	{
		return view('swAccess.edit', compact(['swAccess']));
	}

	public function update(SwAccessRequest $request, SwitchAccess $swAccess)
	{
		// print_r($request->all());
		$swAccess->update($request->only(['date', 'company', 'subject', 'request_start', 'request_end', 'access_start', 'access_end', 'status_id']));

		if ($request->has('pic')) {
			foreach ($request->pic as $k1 => $v1) {
				$swAccess->hasmanypic()->updateOrCreate(
					[
						'id' => $v1['id']
					],
					[
						'swAccess_PIC' => $v1['swAccess_PIC'],
						'email' => $v1['email']
					]
				);
			}
		}
		if ($request->has('ptw')) {
			foreach ($request->ptw as $k2 => $v2) {
				$swAccess->hasmanyptw()->updateOrCreate(
					[
						'id' => $v2['id']
					],
					[
						'swAccess_PTW' => $v2['swAccess_PTW']
					]
				);
			}
		}

		if ($request->has('sw1')) {
			foreach ($request->sw1 as $k3 => $v3) {
				// [1 => ['expires' => true]
				$lk[$v3['switch_id']] = ['swtag_id' => $v3['swtag_id']];
			}
			$swAccess->belongtomanyswitch()->sync($lk);
		}

		Session::flash('flash_message', 'Data successfully Updated!');
		return redirect(route('swAccess.index'));
	}

	public function destroy(SwitchAccess $swAccess)
	{
		SwitchAccess::destroy($swAccess->id);
		$swAccess->hasmanypic()->delete();
		$swAccess->hasmanyptw()->delete();
		$swAccess->belongtomanyswitch()->detach();
		// $swAccess->hasmanyptw()->detach();
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}

}
