<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class llantaModel extends Model
{
    use HasFactory;
    //Llantas

    /** 
     * Nombre de la tabla.
     */
    protected $table= 'llantas';
    /**
     * Llave primaria.
     */
    protected $primaryKey= 'idLlanta';
    /**
     * Desactiva los campos de los tiempos de creacion y edicion
     */
    public $timestamps= false;

    public $incrementing= false;
    /**
     * NOTA:
     *  No use la asingacion masiva por que no me acomodo a esa madre XD
     * 
     */
}
