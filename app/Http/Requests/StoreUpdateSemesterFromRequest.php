<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSemesterFromRequest extends FormRequest
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
        // dd($this);
        $semesterID = $this->route('identify');
        return [
            "identificador" => [
                "required",
                "min:6",
                "max:6",
                'regex:/^(19[0-9]{2}|20[0-9]{2})-(1|2)$/',
                Rule::unique('semesters')->ignore($semesterID),
            ],
            "made_by" => [
                // "required",
                "string",
            ]
        ];
    }

    public function messages(): array
    {
        return [
            "identificador.required" => "É obrigatório indicar o semestre de curso",
            "identificador.min" => "O identificador deve seguir o formato YYYY-SS",
            "identificador" => "Formato incorreto",
        ];
    }
}
