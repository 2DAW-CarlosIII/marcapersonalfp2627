<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'docente_id' => ['required', 'integer', 'min:1'],
            'nombre' => ['required', 'string', 'max:100'],
            'dominio' => ['required', 'alpha_dash', 'max:60'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_fin' => ['nullable', 'date', 'after_or_equal:fecha_inicio'],
            'calificacion' => ['nullable', 'numeric', 'between:0,10'],
    ];
    }

    /** Mensajes propios, por campo y regla. */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del proyecto es obligatorio.',
            'nombre.integer' => 'El nombre del proyecto debe ser un texto.',
            'nombre.max' => 'El nombre del proyecto no puede superar los :max caracteres.',
            'docente_id.required' => 'El docente es obligatorio.',
            'docente_id.integer' => 'El docente debe ser un número.',
            'docente_id.min' => 'El docente debe ser un número positivo.',
            'dominio.required' => 'El dominio del proyecto es obligatorio.',
            'dominio.alpha_dash' => 'El dominio solo puede contener letras, números, guiones y guiones bajos.',
            'dominio.max' => 'El dominio no puede tener más de :max caracteres.',
            'fecha_inicio.required' => 'La fecha de inicio es obligatoria.',
            'fecha_inicio.date' => 'La fecha de inicio no es válida.',
            'fecha_fin.date' => 'La fecha de fin no es válida.',
            'fecha_fin.after_or_equal' => 'La fecha de fin no puede ser anterior a la fecha de inicio.',
            'calificacion.numeric' => 'La calificación debe ser un número.',
            'calificacion.between' => 'La calificación debe estar entre 0 y 10.',
        ];
    }

    /** Cómo se llama cada campo en los mensajes que no personalizamos. */
    public function attributes(): array
    {
        return [
            'docente_id' => 'docente',
            'fecha_fin' => 'fecha de fin',
        ];
    }
}
