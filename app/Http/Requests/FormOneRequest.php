<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormOneRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'fname' => 'required|string|max:20',
            'lname' => 'required|string|max:20',
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'First name is required.',
            'fname.string' => 'First name must be a string.',
            'fname.max' => 'First name may not be greater than 20 characters.',
            'lname.required' => 'Last name is required.',
            'lname.string' => 'Last name must be a string.',
            'lname.max' => 'Last name may not be greater than 20 characters.',
        ];
    }
}
