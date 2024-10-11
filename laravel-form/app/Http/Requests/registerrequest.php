<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerrequest extends FormRequest
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
            'nom' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'le champs nom est obligatoire',
            'nom.min' => 'le champs doit comporter au minimum 3 caracteres',
            'email.required' => 'le champs email est obligatoire',
            'email.unique' => 'cet Adresse email existe deja',
            'password.required' => 'le champs mot de passe est obligatoire',
            'password.min' => 'le champs doit comporter au minimum 8 caracteres'
        ];
    }
}
