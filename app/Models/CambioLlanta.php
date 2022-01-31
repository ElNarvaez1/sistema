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

    // función para la búsqueda deCambio de llanta
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }
}
