<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CambioLlanta extends Model
{
    use HasFactory;
    protected $table = "cambios";
    protected $primaryKey = "idCambio";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idCambio',
        'idUser',
        'fecha',
        'descripcion',
        'monto'
    ];

    // función para la búsqueda deCambio de llanta
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }
}
