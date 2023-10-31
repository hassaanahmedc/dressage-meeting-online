<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'full_name' => ['required', 'string'],
            'organization' => ['nullable', 'string'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string', 'max:15'],
            'city'  => ['nullable', 'string'],
            'zip_code' => ['nullable', 'string', 'max:15'],
            'country' => ['nullable', 'string'],
            'contact_msg' => ['nullable', 'string', 'max:800'],
        ];
    }
}