<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class UserEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = $this->route('users');
        return [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u',
            'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u',
            'password' => [
                'sometimes', Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'conf_password' => 'sometimes',
            'email' => [
                'required', 'unique:users,email,' . request()->route('user')->id
            ],
            'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u|unique:users,telefono' . $user->id,
            'username' => [
                'required', 'min:3', 'unique:users,username,' . $user->id
            ],
            'idRol',
        ];
    }
}
