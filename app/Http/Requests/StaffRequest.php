<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:6|max:14',
            'password' => 'required_with:password_confirmation|nullable|confirmed|min:6',
            // 'password_confirmation' => 'required_with:password',
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'phone' => 'numeric',
            'position_id' => 'required|integer',
            'system_id.*' => 'required|integer',
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'title.required' => 'A title is required',
            // 'body.required' => 'A message is required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'password_confirmation' => 'Password Confirmation',
            'name' => 'Name',
            'email' => 'Email Address',
            'phone' => 'Phone Number',
            'position_id' => 'Position',
            'system_id.*' => 'System Responsibility',
        ];
    }
}
