<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Producto extends Model
{
    use HasFactory;
    use SoftDeletes; //Implementamos
    protected $dates = ['deleted_at']; //Registramos la nueva columna
    protected $table = 'productos';
    protected $primaryKey = 'idProducto';
    public $incrementing = false;
    public $timestamps = false;
    // protected $fillable =[
    //     'nombre',
    //     'descripcion',
    //     'modelo',
    //     'tipo',
    //     'precio_c',
    //     'precio_v',
    //     'stock',
    //     'imagen'
        
    // ];
    // función para la búsqueda de productos
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }
}
