<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SwAccessRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'date' => 'required|date',
			'pic*.swAccess_PIC' => 'required',
			'pic*.email' => 'required|email',
			'company' => 'required',
			'subject' => 'required',
			// 'ptw.*.swAccess_PTW' => 'required',
			// 'request_start' => 'date',
			// 'request_end' => 'date',
			'sw1.*.switch_id' => 'required',
			'sw1.*.swtag_id' => 'required',
			// 'access_start' => 'date',
			// 'access_end' => 'date',
			'status_id' => 'required',
		];
	}
	
	public function messages()
	{
		return [
			'date.required' => 'The date field is required. ',
			'pic.*.required' => 'Requester and email is needed',
			// 'pic*.email' => 'required|email',
			'company.required' => 'Requester company is needed',
			'subject.required' => 'Email subject is required',
			// 'ptw.*.swAccess_PTW' => 'required',
			// 'request_start' => 'Request date start is missing',
			// 'request_end' => 'Request date end is missing',
			'sw1.*.required' => 'required',
			// 'sw1.*.swtag_id' => 'required',
			// 'access_start' => 'Access date start is missing',
			// 'access_end' => 'Access date end is missing',
			'status_id.required' => 'Status Switch Access is missing',
			// 'building_id.required' => 'The building is required. ',
			// 'subsystem.required' => 'The Subsystem is required. ',
			// 'issue.required' => 'The Problem/Findings/Issue is required. ',
			// 'solution.required' => 'The Solution is required. ',
			// 'syst.*.required' => 'The System that is effected is required. ',
			// 'attd.*.required' => 'The Person/Attendance involved in troubleshooting is required. ',
			// 'dtag.*.required' => 'The Device Tag is required. ',
		];
	}
}
