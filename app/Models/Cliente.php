<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cliente extends Model
{

    use SoftDeletes; //Implementamos
    protected $table = 'clientes';
    protected $dates = ['deleted_at']; //Registramos la nueva columna
    protected $primarykey = 'idCliente';
    public $timestamps = false;


    protected $fillable = [
        'idCliente',
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'fecha',
        'telefono'
    ];

    // función para la búsqueda de productos
    public function scopeBuscarpor($query, $tipo, $buscar) {
        if ( ($tipo) && ($buscar) ) {
            return $query->where($tipo,'like',"%$buscar%");
        }
    }

    public function getVentas(){
        return $this->hasMany('App\Models\Venta');
    }
}
