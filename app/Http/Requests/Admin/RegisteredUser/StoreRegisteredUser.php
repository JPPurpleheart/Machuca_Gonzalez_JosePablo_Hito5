<?php

namespace App\Http\Requests\Admin\RegisteredUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRegisteredUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.registered-user.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', Rule::unique('registered_users', 'email'), 'string'],
            'name' => ['required', 'string'],
            'num_miembros' => ['required', 'integer'],
            'phone' => ['required', 'string'],
            'surname' => ['required', 'string'],
            
        ];
    }
}
