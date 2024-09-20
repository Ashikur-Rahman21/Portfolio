<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'facebook' => 'url|max:255',
            'twitter' => 'url|max:255',
            'linkedin' => 'url|max:255',
            'github' => 'url|max:255',
            'about_me' => 'string',
            'history' => 'string',
        ];
    }
}
