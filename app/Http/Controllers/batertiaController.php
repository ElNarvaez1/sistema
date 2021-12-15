<?php

namespace App\Http\Controllers;

use App\Models\batertiaModel;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


/**
 * @author Narvaez Ruiz Alexis
 * 
 * 
 * Clase constroladora de las vistas "Baterias"
 * 
 */
class batertiaController extends Controller
{
    

    /**
     * Funcion principal
     * 
     * @param $request Solicritud del lado del cliente.
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscarpor');

        $tipo = $request->get('type');
        $variablesurl = $request->all();
        $productos = Producto::buscarpor($tipo,Str::upper($buscar))->paginate(5)->appends($variablesurl);

       return view('productos.baterias_index',compact('productos'));
    }


     /**
      * Registra Una nueva LLanta.
      * 
     */
     public function create()
     {
         return view('productos.baterias_add');
 
     }

    /**
     * Funcion para mostrar una "Bateria"
     * 
     * @param 
     */
    public function show()
    {
       
    }

    /**
     * Funcion para mostrar registrar una nueva bateria "Bateria"
     * 
     * @param 
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Funcion para mostrar borrar una bateria "Bateria"
     * 
     * @param 
     */
    public function destroy(batertiaModel $bateria)
    {
       
    }
}
