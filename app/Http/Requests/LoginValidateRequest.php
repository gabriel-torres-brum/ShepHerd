<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidateRequest extends FormRequest
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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "email.required" => "Digite um e-mail válido",
            "email.email" => "Digite um e-mail válido",
            "email.max" => "Digite um e-mail válido",
            "password.required" => "A senha é obrigatória"
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'email' => [
                "required",
                "email",
                "max:100"
            ],
            'password' => [
                "required"
            ]
        ];
        return $rules;
    }
}
