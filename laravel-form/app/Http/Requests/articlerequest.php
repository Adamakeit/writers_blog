<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articlerequest extends FormRequest
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
            'titre' => 'required|min:3',
            'descriptions' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est requis',
            'titre.min' => 'Le titre doit contenir au minimum 3 caractères',
            'descriptions.required' => 'Les descriptions sont requises',
            'descriptions.min' => 'Les descriptions doivent contenir au minimum 10 caractères',
        ];
    }
}
