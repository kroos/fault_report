<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InspectionRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'date' => 'required|date',
			'system_id' => 'required',
			'title' => 'required',
			'tag' => 'required',
			'attd.*.attendees_id' => 'required',
			'building' => 'required|max:255',
			'remarks' => 'nullable|max:4000',
			'ready' => 'nullable',
			'form.*.label' => 'required|max:255',
			'form.*.input' => 'required|max:255',
			'form.*.input_type' => 'required',
			'form.*.remarks' => 'nullable|max:4000',
			'image.*.label' => 'required|max:255',
			'image.*.input' => 'nullable|file|max:20480|mimes:jpeg,bmp,png,jpg',
			'image.*.input_type' => 'required',
			'image.*.remarks' => 'nullable|max:4000',
			'doc.*.label' => 'required|max:255',
			'doc.*.input' => 'nullable|file|max:20480|mimes:pdf,txt,log,docx,doc,xlsx,xls,ppt,pptx',
			'doc.*.input_type' => 'required',
			'doc.*.remarks' => 'nullable|max:4000',
		];
	}
	
	// public function messages()
	// {
	// 	return [
	// 		'date' => 'required|date',
	// 		'title' => 'required',
	// 		'attd.*.attendees_id' => 'required',
	// 		'building' => 'required',
	// 		'remarks' => '',
	// 		'form.*.label' => '',
	// 		'form.*.input' => '',
	// 		'form.*.input_type' => '',
	// 		'form.*.remarks' => '',
	// 	];
	// }

	public function attributes()
	{
		return [
			'date' => 'Date Inspection',
			'title' => 'Inspection Checklist Title',
			'attd.*.attendees_id' => 'Attendees',
			'building' => 'Building',
			'remarks' => 'Inspection Remarks',
			'ready' => 'Inspection Checklist ready to be reviewed',
			'form.*.label' => 'Checklist Label',
			'form.*.input' => 'Checklist Input',
			'form.*.input_type' => 'Checklist Input Type',
			'form.*.remarks' => 'Checklist Remarks',
			'image.*.label' => 'Image Checklist Label',
			'image.*.input' => 'Image Checklist Input',
			'image.*.input_type' => 'Image Checklist Input Type',
			'image.*.remarks' => 'Image Checklist Remarks',
			'doc.*.label' => 'Document Checklist Label',
			'doc.*.input' => 'Document Checklist Input',
			'doc.*.input_type' => 'Document Checklist Input Type',
			'doc.*.remarks' => 'Document Checklist Remarks',
		];
	}
}
