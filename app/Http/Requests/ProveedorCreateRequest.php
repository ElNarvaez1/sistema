<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorCreateRequest extends FormRequest
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
            'nombreEmpresa' => 'required|regex:/^[\pL\s\-]+$/u',
            'direccion' => 'required|regex:/[\pL\s\-"+0-9]+.$/u', // regex Solo: incluye algunos carcateres
            'correo' => 'required|email|unique:proveedores,correo',
            'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u|unique:proveedores'
        ];
    }
}