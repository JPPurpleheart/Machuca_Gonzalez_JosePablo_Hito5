<?php

namespace App\Http\Requests\Admin\Folleto;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreFolleto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.folleto.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id_usuario' => ['required', 'integer'],
            'fecha' => ['required', 'date'],
            'cantidad_entregada' => ['required', 'integer'],
            'tipo_folleto' => ['required', 'string'],
            
        ];
    }
}
