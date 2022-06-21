<?php

namespace App\Http\Requests\Admin\RegisteredUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRegisteredUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.registered-user.edit', $this->registeredUser);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => ['sometimes', 'email', Rule::unique('registered_users', 'email')->ignore($this->registeredUser->getKey(), $this->registeredUser->getKeyName()), 'string'],
            'name' => ['sometimes', 'string'],
            'num_miembros' => ['sometimes', 'integer'],
            'phone' => ['sometimes', 'string'],
            'surname' => ['sometimes', 'string'],
            
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
