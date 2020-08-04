<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InspectionApproveRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'approved' => 'nullable',
			'comments' => 'required',
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
			'approved' => 'Approver Approval',
			'comments' => 'Approver Comment',
		];
	}
}
