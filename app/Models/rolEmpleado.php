<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolEmpleado extends Model
{
    use HasFactory;
    protected $table = 'rolEmpleados';
    public $timestamps = false;

    protected $fillable =[
        'descripcion',
        'salario'    
    ];
    
// Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongTO('App\Models\User');
    }
}
