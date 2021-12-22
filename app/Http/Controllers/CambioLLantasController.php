<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CambioLlanta;
use Session;

class CambioLLantasController extends Controller
{

    public function index(){
        return view('cambiollantas.index');
    }
}
