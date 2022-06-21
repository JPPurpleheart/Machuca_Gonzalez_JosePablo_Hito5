<?php

namespace App\Http\Requests\Admin\Libro;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.libro.edit', $this->libro);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'isbn' => ['sometimes', 'string'],
            'titulo' => ['sometimes', 'string'],
            'autor' => ['sometimes', 'string'],
            'genero' => ['sometimes', 'string'],
            'recomendacion_generacional' => ['sometimes', 'string'],
            'id_editorial' => ['sometimes', 'integer'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
