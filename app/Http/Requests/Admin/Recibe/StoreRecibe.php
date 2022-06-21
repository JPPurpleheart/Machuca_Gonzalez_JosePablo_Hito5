<?php

namespace App\Http\Requests\Admin\Recibe;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRecibe extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.recibe.create');
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
            'id_producto' => ['required', 'integer'],
            'fecha' => ['required', 'date'],
            'stock' => ['required', 'integer'],
            
        ];
    }
}
