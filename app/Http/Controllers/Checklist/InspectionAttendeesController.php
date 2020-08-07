<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\Model\InspectionAttendee;

class InspectionAttendeesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

	}

	public function create()
	{

	}

	public function store(Request $request)
	{
	}

	public function show(InspectionAttendee $inspectionAttend)
	{

	}

	public function edit(InspectionAttendee $inspectionAttend)
	{

	}

	public function update(Request $request, InspectionAttendee $inspectionAttend)
	{

	}

	public function destroy(InspectionAttendee $inspectionAttend)
	{
		InspectionAttendee::destroy($inspectionAttend->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
