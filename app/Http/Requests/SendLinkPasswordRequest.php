<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendLinkPasswordRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'email' => 'required|email',
		];
	}
	
	public function messages()
	{
		return [
			'required' => 'The :attribute field is required. ',
		];
	}
}
