<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormTwoRequest extends FormRequest
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
            'email' => 'required|email',
            'passport_id' => 'required|numeric|digits:16',
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
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'passport_id.required' => 'Passport ID is required.',
            'passport_id.numeric' => 'Passport ID must be a number.',
            'passport_id.digits' => 'Passport ID must be 16 digits long.',
        ];
    }
}
