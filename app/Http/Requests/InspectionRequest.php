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
			'attd.*.attendees_id' => 'required',
			'building' => 'required',
			'remarks' => '',
			'form.*.label' => 'required',
			'form.*.input' => 'required',
			'form.*.remarks' => '',
		];
	}
	
	public function messages()
	{
		return [
			'date' => 'required|date',
			'title' => 'required',
			'attd.*.attendees_id' => 'required',
			'building' => 'required',
			'remarks' => '',
			'form.*.label' => '',
			'form.*.input' => '',
			'form.*.remarks' => '',
		];
	}

	public function attributes()
	{
		return [
			'date' => 'Date Inspection',
			'title' => 'Title',
			'attd.*.attendees_id' => 'Attendies',
			'building' => 'Building',
			'remarks' => 'Inspection Remarks',
			// 'form.*.label' => '',
			'form.*.input' => 'Checklist Input',
			'form.*.remarks' => 'Checklist Remarks',
		];
	}
}
