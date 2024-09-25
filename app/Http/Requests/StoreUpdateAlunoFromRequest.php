<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateAlunoFromRequest extends FormRequest
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
        $alunoID = $this->route('student');

        $rules = [
            "matricula" => [
                    "min:5",
                    "max:9",
                    "required",
                    Rule::unique('alunos')->ignore($alunoID),
                    "string",
            ],
            "nome" => [
                "min:3",
                "max:100",
                "string",
                "required",
                Rule::unique("alunos")->ignore($alunoID),
            ],

            "email" => [
                "max:255",
                "string",
                "nullable",
                "required",
                Rule::unique("alunos")->ignore($alunoID),
                'regex:/^[a-zA-Z-0-9-@_.-]+@[a-zA-Z.]+$/i',
            ],
            "telefone" => [
                "nullable",
                "max:20",
                "regex:/^[0-9.() ]/",
            ],
            "semestre_ingresso" => [
                "size:6",
                "required",
                'regex:/^(19[0-9]{2}|20[0-9]{2})-(1|2)$/',
            ]
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do sorteio é obrigatório',
            'nome.max' => 'Digite no máximo 30 dígitos',
            'semestre_ingresso.required'=>'O semestre de ingresso é obrigatório',
            // 'participantes_selecionados.required' => 'Selecione os participantes',
            'matricula.max' => 'Tamanho de matrícula inválido. Excedeu o limite'
        ];
    }
}
