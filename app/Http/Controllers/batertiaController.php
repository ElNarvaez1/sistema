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
<<<<<<< HEAD
        $productos = Producto::buscarpor($tipo, Str::upper($buscar))->paginate(5)->appends($variablesurl);

        return view('productos.baterias_index', compact('productos'));
=======
        $productos = batertiaModel::select("*")->get();//Producto::buscarpor($tipo, Str::upper($buscar))->paginate(5)->appends($variablesurl);

        return view('productos.baterias.baterias_index', compact('productos'));
>>>>>>> Narvaez
    }

    /**
     * Registra Una nueva LLanta.
     * 
     */
    public function create()
    {
<<<<<<< HEAD
        return view('productos.baterias_add');
=======
        return view('productos.baterias.baterias_add');
>>>>>>> Narvaez
    }

    /**
     * Funcion para mostrar una "Bateria"
     * 
     * @param $baterium Bateria a buscar
     */
<<<<<<< HEAD
    public function show(batertiaModel $baterium)
    {
        if (!$baterium) {
            return view('errors.404');
        }
        return view('productos.baterias_show', ["producto" => $baterium]);
=======
    public function show(Request $request, batertiaModel $baterium)
    {
        // if (!$baterium) {
        //     return view('errors.404');
        // }
        return $baterium;
        return view('productos.baterias.baterias_show', ["producto" => $baterium]);
>>>>>>> Narvaez
    }

    /**
     * Funcion para registrar una nueva bateria "Bateria"
     * 
     * @param 
     */
    public function store(Request $request)
    {
        //Registro de producto.
        $producto = new Producto();

        $producto->idProducto = $request->nombre[0].''.
                                $request->nombre[1].''.
                                $request->nombre[2].'-'.
                                date('dmy'); //-> se pone solo
        $producto->idProveedor = $request->proveedor;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imageFile;
        $producto->precioCompra = $request->precio_c;
        $producto->PrecioVenta = $request->precio_v;
        $producto->existencia = $request->existencia;


        //Registros de la bteria como tal
        $bateria = new batertiaModel();
        $bateria->idBateria = $request->modelo[0].''.
                             $request->modelo[1].'-'.
                                date('dmy'); //-> Se supone que pone solo xd
        $bateria->idMarca = $request->idMarca;
        $bateria->tamanio = $request->tamanio;
        $bateria->modelo = $request->modelo;
        $bateria->voltaje = $request->voltaje;
<<<<<<< HEAD
=======
        $bateria->save();

        return redirect()->route('bateria.index');   
>>>>>>> Narvaez
    }

    /**
     * Funcion para borrar una bateria "Bateria"
     * 
     * @param 
     */
<<<<<<< HEAD
    public function destroy(batertiaModel $bateria)
    {
        return "Aun en construccion";
    }

    public function edit(batertiaModel $baterium)
    {
        return view('productos.baterias_edit', ["producto" => $baterium]);
=======
    public function destroy(Request $request, batertiaModel $baterium)
    {
        $baterium->delete();
        return redirect()->route('bateria.index');
    }

    public function edit(Request $request, batertiaModel $baterium)
    {
        return view('productos.baterias.baterias_edit', ["producto" => $baterium]);
    }

    public function update(batertiaModel $baterium){
        $baterium->save();   
        return redirect()->route('bateria.index');      
>>>>>>> Narvaez
    }
}
