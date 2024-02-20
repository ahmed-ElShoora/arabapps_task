<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormThreeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'status' => 'required|string',
            'age' => 'required|numeric',
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
            'status.required' => 'Status is required.',
            'status.string' => 'Status must be a string.',
            'age.required' => 'Age is required.',
            'age.numeric' => 'Age must be a number.',
        ];
    }
}
