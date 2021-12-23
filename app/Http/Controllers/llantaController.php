<?php

namespace App\Http\Controllers;

use App\Models\batertiaModel;
use App\Models\llantaModel;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class llantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscarpor');

        $tipo = $request->get('type');
        $variablesurl = $request->all();
        $productos = llantaModel::all(); //Producto::buscarpor($tipo,Str::upper($buscar))->paginate(5)->appends($variablesurl);

        return view('productos.llantas_index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.llantas_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creamos el objeto de la llanta   
        // $productos = new Producto();

        // $productos->idProducto = ''; //se ponesolo creo 
        // $productos->idProveedor = $request->proveedor; //Necesita del compo de lista;
        // $productos->nombre = $request->nombre;
        // $productos->descripcion  = $request->modelo;
        // $productos->imagen = $request->imageFile;
        // $productos->precioCompra = $request->precio_c;
        // $productos->PrecioVenta = $request->precio_v;
        // $productos->existencia = $request->existencia;
        // $productos->save();

        //Datos del modelo de llanta
        $llanta = new llantaModel();
        $llanta->idLlanta =  $request->idLlanta;
        $llanta->idRin = $request->rin; //Aun no tien
        $llanta->cargaMaxima = $request->cargaMaxima;
        $llanta->velocidadMaxima = $request->velocidadMaxima;
        $llanta->medida = $request->medida;
        $llanta->presion = $request->presion;
        $llanta->save();

        //Datos del formulario
        return redirect()->route('llantas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(llantaModel $llanta)
    {
        return view(
            'productos.llantas_edit',
            compact('llanta')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, llantaModel $llanta)
    {
        //Validadomos.


        $llanta->save();
        return redirect()->route('llantas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
