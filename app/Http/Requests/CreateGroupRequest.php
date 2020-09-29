<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGroupRequest extends FormRequest
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
            'name' => 'required|min:2|unique:groups,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Truong nay khong duoc de trong',
            'name.min' => 'Truong nay it nhat 2 ky tu',
            'name.unique' => 'Ten group da ton tai',
        ];
    }
}
