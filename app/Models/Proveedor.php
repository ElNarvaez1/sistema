<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Proveedor extends Model
{
    use HasFactory;

    use SoftDeletes; //Implementamos
    protected $dates = ['deleted_at']; //Registramos la nueva columna
    protected $table = 'proveedores';
    protected $primarykey ='idProveedor';
    public $timestamps = false;
    protected $fillable =[
        
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'nombreEmpresa',
        'direccion',
        'correo',
        'telefono'
        
    ];
    // función para la búsqueda de productos
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }
}
