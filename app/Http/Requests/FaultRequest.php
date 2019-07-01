<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaultRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'image.*' => 'image|max:5000',
			'date' => 'required|date',
			'building_id' => 'required',
			'subsystem' => 'required',
			'issue' => 'required',
			// 'solution' => 'required',
			'syst.*.system_id' => 'required',
			// 'attd.*.attendees_id' => 'required',
			// 'dtag.*.device_tag' => 'required',
		];
	}
	
	public function messages()
	{
		return [
			'date.required' => 'The date field is required. ',
			'building_id.required' => 'The building is required. ',
			'subsystem.required' => 'The Subsystem is required. ',
			'issue.required' => 'The Problem/Findings/Issue is required. ',
			'solution.required' => 'The Solution is required. ',
			'syst.*.required' => 'The System that is effected is required. ',
			'attd.*.required' => 'The Person/Attendance involved in troubleshooting is required. ',
			'dtag.*.required' => 'The Device Tag is required. ',
		];
	}
}
