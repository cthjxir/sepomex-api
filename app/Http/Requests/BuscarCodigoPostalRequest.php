<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuscarCodigoPostalRequest extends FormRequest
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
            'codigo_postal' => ['sometimes', 'string', 'max:5'],
            'estado' => ['sometimes', 'string', 'max:255'],
            'municipio' => ['sometimes', 'string', 'max:255'],
            'clave_estado' => ['sometimes', 'integer'],
            'clave_municipio' => ['sometimes', 'string', 'max:255'],
            'nombre' => ['sometimes', 'string', 'max:255'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'codigo_postal.max' => 'El código postal no puede tener más de 5 caracteres.',
            'estado.max' => 'El nombre del estado no puede tener más de 255 caracteres.',
            'municipio.max' => 'El nombre del municipio no puede tener más de 255 caracteres.',
            'clave_estado.integer' => 'La clave del estado debe ser un número entero.',
            'clave_municipio.max' => 'La clave del municipio no puede tener más de 255 caracteres.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
        ];
    }
}
