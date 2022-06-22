<?php

namespace App\Http\Requests\Admin\user;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'family' => 'required',
            'father' => 'required',
            'mobile' => ['required','digits:11', 'numeric', 'regex:/(09)[0-9]{9}/'],
            'code_meli' => 'required|unique:users',
            'password' => 'required|confirmed', 'min:8',
            'address' => 'nullable',
            'birthday' => 'required',
            'roles.*' => 'required',
            'address' => 'required',

        ];
    }
}
