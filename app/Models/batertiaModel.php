<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @author Narvaez Ruiz Alexis
 * 
 * 
 * 
 * Clase modelo para registrar una nueva bateria.
 * 
 */
class batertiaModel extends Model
{
    use HasFactory;

    /** 
     * Nombre de la tabla.
     */
    protected $table = 'Baterias';
    /**
     * Llave primaria.
     */
    protected $primarykey = 'idBateria';
    /**
     * Desactiva los campos de los tiempos de creacion y edicion
     */
    public $timestamps = false;


    /**
     * NOTA:
     *  No use la asingacion masiva por que no me acomodo a esa madre XD
     * 
     */
}
