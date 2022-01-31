<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RinModel extends Model
{
    use HasFactory;

    //Atrubitos de para el modelo.
    protected $table = "rin";
    protected $primaryKey ='idRin';
    public $timestamps = false;
    public $incrementing = false;
}
