<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
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
            'position' => 'required',
            'system_role_id' => 'required|integer'
        ];
    }

    public function attributed()
    {
        return [
            'position' => 'Position',
            'system_role_id' => 'System Role'
        ];
    }
}
