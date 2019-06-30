<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'password' => 'required|confirmed|min:6',
			'password_confirmation' => 'required|min:6',
		];
	}
	
	public function messages()
	{
		return [
			'password.required' => 'The :attribute field is required. ',
			'password.confirmed' => 'The :attribute field is not same between each other. ',
			'min' => 'Minimum requirement for :attribute field is 6 alphabets or digits. ',
		];
	}
}
