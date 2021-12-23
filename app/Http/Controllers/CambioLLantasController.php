<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CambioLlanta;
use DateTime;
use Session;

class CambioLLantasController extends Controller
{
    //retorna la vista principal de cambio de llanats
    public function index(){
        $listaCambioLlantas = CambioLlanta::all();
        return view('cambiollantas.index',compact('listaCambioLlantas'));
    }
    //Retorna la vista para agregar un nuevo cambio de llantas
    public function create()
    {
        return view('cambiollantas.add');

    }
    public function store(Request $request){
        $cambiollanta = new CambioLlanta();
        $fecha = date('Y-m-d');
        $cambiollanta->idCambio = 'CAMB-'.date('Y-m-d H:i:s');
        $cambiollanta->idUser = 'Admin';
        $cambiollanta->fecha = $fecha;
        $cambiollanta->descripcion = $request->input('descripcion');
        $cambiollanta->monto = $request->input('totalcambio');
        $cambiollanta->save();
        return view('cambiollantas.add');
   }
}