<?php

namespace App\Http\Requests\Admin\Ropero;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRopero extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.ropero.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string'],
            'color' => ['required', 'string'],
            'estado' => ['required', 'string'],
            'talla' => ['required', 'integer'],
            'categoria' => ['required', 'integer'],
            'id_usuario' => ['required', 'integer'],
            
        ];
    }
}
