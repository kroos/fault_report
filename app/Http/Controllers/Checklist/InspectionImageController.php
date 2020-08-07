<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use File;

// load model
use App\Model\InspectionImage;

class InspectionImageController extends Controller
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

	public function show(InspectionImage $inspectionImage)
	{

	}

	public function edit(InspectionImage $inspectionImage)
	{

	}

	public function update(Request $request, InspectionImage $inspectionImage)
	{

	}

	public function destroy(InspectionImage $inspectionImage)
	{
		// dd('/home/prpcdxws/public_html/'.$inspectionImage->input);
		File::delete('/home/prpcdxws/public_html/'.$inspectionImage->input);
		InspectionImage::destroy($inspectionImage->id);
		return response()->json([
			'message' => 'Data deleted',
			'status' => 'success'
		]);
	}
}
