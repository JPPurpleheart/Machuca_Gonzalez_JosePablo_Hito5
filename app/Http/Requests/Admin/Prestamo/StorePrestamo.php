<?php

namespace App\Http\Requests\Admin\Prestamo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePrestamo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.prestamo.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id_libro' => ['required', 'string'],
            'usuario_prestamo' => ['required', 'integer'],
            'fechaInicio' => ['required', 'date'],
            'fechaFin' => ['required', 'date'],
            
        ];
    }
}
