<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidationRequest extends FormRequest
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
            'user_role' => 'required|in:parent,babysitter,nanysitter,oldsitter',
            'description' => ['required','string'],
            'confirmed' => 'boolean',
            'start_hour' => 'required|date|before:end_hour',
            'end_hour' => 'required|date|after:start_hour',
            'start_day' => 'required|date_format:H:i',
            'end_day' => ['nullable','date_format:H:i |after_or_equal:start_day'],
            'nbr_children' => 'required|numeric|min:1',
            'pricing_per_hour' => 'required|numeric|min:0|max:8',
            'rating' => 'nullable|integer|min:1|max:5',
        ];
    }
}
