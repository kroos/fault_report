<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemplateRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'title' => 'required|max:5000',
			'system_id' => 'required',
			'form.*.formtype' => 'required',
			'form.*.label' => 'required',
			'description' => 'required',
		];
	}
	
	// public function messages()
	// {
	// 	return [
	// 	];
	// }

	public function attributes()
	{
		return [
			'title' => 'Title',
			'system_id' => 'System',
			'form.*.formtype' => 'Form Type',
			'form.*.label' => 'Form Label',
			'description' => 'Description',
		];
	}
}
