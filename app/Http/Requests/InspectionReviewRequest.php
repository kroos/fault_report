<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InspectionReviewRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'reviewed' => 'nullable',
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
			'reviewed' => 'Reviewer Approval',
			'comments' => 'Reviewer Comment',
		];
	}
}
