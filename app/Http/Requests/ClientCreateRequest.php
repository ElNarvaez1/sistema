<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Cliente;
class ClientCreateRequest extends FormRequest
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
                            'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                            'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                            'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                            'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u|unique:clientes'
                           
        ];
    }
}