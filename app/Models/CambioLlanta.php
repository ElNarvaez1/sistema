<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CambioLlanta extends Model
{
    use HasFactory;
    protected $table = "cambios";
    public $timestamps = false;
}
