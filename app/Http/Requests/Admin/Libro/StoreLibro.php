<?php

namespace App\Http\Requests\Admin\Libro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.libro.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'isbn' => ['required', 'string'],
            'titulo' => ['required', 'string'],
            'autor' => ['required', 'string'],
            'genero' => ['required', 'string'],
            'recomendacion_generacional' => ['required', 'string'],
            'id_editorial' => ['required', 'integer'],
            
        ];
    }
}
