<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidateRequest extends FormRequest
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
            "name.required" => "Digite seu nome completo",
            "name.string" => "Digite seu nome completo",
            "name.max" => "Digite seu nome completo",
            "email.required" => "Digite um e-mail válido",
            "email.email" => "Digite um e-mail válido",
            "email.max" => "Digite um e-mail válido",
            "email.unique" => "Usuário já cadastrado",
            "password.required" => "A senha é obrigatória",
            "password.min" => "A senha deve ter, no mínimo, 8 caracteres",
            "password.confirmed" => "Confirmação de senha inválida",
            "password.max" => "Usuário ou senha inválidos",

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
            'name' => [
                "required",
                "string",
                "max:100"
            ],
            'email' => [
                "required",
                "email",
                "max:100",
                "unique:users,email"
            ],
            'password' => [
                "required",
                "confirmed",
                "min:8",
                "max:100"
            ]
        ];
        return $rules;
    }
}
