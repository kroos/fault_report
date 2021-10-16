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
			// 'doc.*' => 'mimes:doc,xls,ppt,docx,xlsx,pptx,txt,csv,pdf',
			// 'image.*' => 'image|max:5000',
			'date' => 'required|date',
			'title' => 'required',
			'ticket_id' => 'nullable',
			'building_id' => 'required',
			'subsystem' => 'required',
			// 'issue' => 'required',
			// 'solution' => 'required',
			'syst.*.system_id' => 'required',
			'attd.*.attendees_id' => 'required',
			// 'dtag.*.device_tag' => 'required',
			'ffind.*.image.*' => 'image',
			'fissu.*.image.*' => 'image',
			'fsolu.*.image.*' => 'image',
		];
	}
	
	public function messages()
	{
		return [
			'ticket_id.required' => 'The ticket ID field is required. ',
			// 'image.*' => 'Image uploaded must be jpeg, png, bmp, gif, svg, or webp',
			// 'doc.*' => 'Documents uploaded must be excel, word, power point, text, csv or pdf',
			'title.required' => 'The title field is required. ',
			'date.required' => 'The date field is required. ',
			'building_id.required' => 'The building is required. ',
			'subsystem.required' => 'The Subsystem is required. ',
			// 'issue.required' => 'The Problem/Findings/Issue is required. ',
			// 'solution.required' => 'The Solution is required. ',
			'syst.*.required' => 'The System that is effected is required. ',
			'attd.*.required' => 'The Person/Attendance involved in troubleshooting is required. ',
			'dtag.*.required' => 'The Device Tag is required. ',
			'ffind.*.image.*' => 'The file should be jpeg, jpg, png and bmp.',
			'fissu.*.image.*' => 'The file should be jpeg, jpg, png and bmp.',
			'fsolu.*.image.*' => 'The file should be jpeg, jpg, png and bmp.',
		];
	}
}