<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoasValidateRequest extends FormRequest
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
            "nome.required" => "Digite um nome válido",
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
            'nome' => [
                "required",
            ],
        ];
        return $rules;
    }
}