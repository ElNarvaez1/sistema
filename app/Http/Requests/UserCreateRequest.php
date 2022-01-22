<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u',
            'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u',
            'password' => [
                'required', Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'email' => 'required|email|unique:users,email',
            'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u|unique:users',
            'username' => 'required|unique:users',
        ];
    }
}
