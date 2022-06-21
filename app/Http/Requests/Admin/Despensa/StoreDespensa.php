<?php

namespace App\Http\Requests\Admin\Despensa;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreDespensa extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.despensa.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'categoria' => ['required', 'string'],
            'nombre' => ['required', 'string'],
            'stock' => ['required', 'integer'],
            
        ];
    }
}
