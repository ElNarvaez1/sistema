<?php

namespace App\Http\Controllers;

use App\Models\batertiaModel;
use App\Models\llantaModel;
use App\Models\Producto;
use App\Models\RinModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Storage;
// clase session para mandar alertas

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function __construct()
    {
        $this->middleware('can:productos.index');
    }
    /* retorna la vista inventario, esta mostrando una
    tabla de productos y paginacion, asi mismo haciendo
    busquedas de productos por tipo.
     */


    public function index(Request $request)
    {
        $buscar = $request->get('buscarpor');

        $tipo = $request->get('type');
        $variablesurl = $request->all();
        $productos = Producto::buscarpor($tipo, Str::upper($buscar))->paginate(5)->appends($variablesurl);

        for ($i = 0; $i < count($productos); $i++) {
            $productos[$i]->tipo = "Temp";
            if (batertiaModel::find($productos[$i]->idProducto) != null) {
                //El producto existe en la tabla de baterias
                $productos[$i]->tipo = 'Bateria';
            }
            if (llantaModel::find($productos[$i]->idProducto) != null) {
                //El producto existe en la tabla de baterias
                $productos[$i]->tipo = 'LLanta';
            }
            if (RinModel::find($productos[$i]->idProducto) != null) {
                $productos[$i]->tipo = 'Rin';
            }
        }

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  retorna la vista Agregar productos
    public function create()
    {
        return view('productos.productos_add');
    }

    //======================================================================
    /**
     * Este arreglo no va aqui pero lo puse provisionalmente.
     */
    public $rulesToProdcuto = [
        //Validar la informacion del prodcuto.
        'nombre' => 'required|regex:/^[\pL\s\-]+$/u',
        'descripcion' => 'required|regex:/[\pL\s\-"+0-9]+.$/u',
        'precio_c' => 'required|numeric',
        'precio_v' => 'required|numeric',
        'stock' => 'required|numeric'
        //'proveedor' => 'required'
    ];

    public $rulesToLlanta = [
        //Validar la informacion del prodcuto.
        //'rin' => 'required', -> No se como validarlo xd 
        'cargaMaxima' => 'required|numeric',
        'velocidadMaxima' => 'required|numeric',
        'presion' => 'required|numeric',
        'anchoLlanta' => 'required|numeric',
        'diametro' => 'required|numeric',
        'fabricante' => 'required|alpha',
        'aniofabricante' => 'required|numeric',
        'tipoCarro' => 'required|alpha',
        'marcaCarro' => 'required|alpha_num'
    ];

    public $rulesToBaterias = [
        'alto' => 'required|numeric',
        'ancho' => 'required|numeric',
        'largo' => 'required|numeric',
        'amperes' => 'required|numeric',
        'peso' => 'required|numeric',
        'modelo' => 'required|alpha_dash',
        'voltaje' => 'required|numeric'
    ];

    public $rulesRin = [
        'numeroRin' => 'required|numeric'
    ];
    //======================================================================



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /* Esta función crear un nuevo producto,
    una vez creado nos redirecciona a la misma vita de crear un producto
    con un mensaje. Asi mismo esto haciendolo N veces.
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
        //         'descripcion' => 'required|regex:/[\pL\s\-"+0-9]+.$/u', // regex Solo: incluye algunos carcateres
        //         'modelo' => 'required|unique:product',
        //         'tipo' => 'required',
        //         'precio_c' => 'required|numeric',
        //         'precio_v' => 'required|numeric',
        //         'stock' => 'required|numeric',
        //         'imagen' => 'required|image|max:2048'
        //     ]
        // );
        //-----> Seccion de la inpformacion basica de los productos



        $producto = new Producto();
        $producto->nombre = Str::upper($request->input('nombre'));
        $producto->descripcion = Str::upper($request->input('descripcion'));
        // $producto->modelo = Str::upper($request->input('modelo'));
        $producto->precioCompra = $request->precio_c;
        $producto->PrecioVenta = $request->precio_v;
        $producto->existencia = $request->stock;
        $producto->idProveedor = $request->proveedor;

        $producto->idProducto = 'PROD-' . $producto->nombre . '-' . Str::random(5);

        $url_temp = $request->imagen;
        $producto->imagen = "url_temp";


        switch ($request->checkProducto) {
            case 'llantas': {
                    //Selecciono una llanta

                    //Validamos que la informacion de la llanta sea valida.    
                    $request->validate($this->rulesToLlanta);

                    //Validamos que la informacion del productos sea valida.    
                    $request->validate($this->rulesToProdcuto);
                    $producto->nombre = 'Llanta - '.$producto->nombre;

                    $newLlanta = new llantaModel();
                    $newLlanta->idLlanta = $producto->idProducto;
                    $newLlanta->idRin = $request->rin;
                    $newLlanta->indiceCarga = $request->cargaMaxima;
                    $newLlanta->velocidadMaxima = $request->velocidadMaxima;
                    $newLlanta->presion = $request->presion;
                    $newLlanta->ancho = $request->anchoLlanta;
                    $newLlanta->diametro = $request->diametro;
                    $newLlanta->Fabricante = $request->fabricante;
                    $tempYear = Carbon::create($request->aniofabricante, 0, 0);
                    $newLlanta->anioFabricacion = $tempYear;
                    $newLlanta->tipoDeCarro = $request->tipoCarro;
                    $newLlanta->marcasDeCarro = $request->marcaCarro;
                    $newLlanta->save();
                    $producto->saveOrFail();
                }
                break;
            case 'baterias': {
                    //Validamos que la informacion de la bateria sea valida.    
                    $request->validate($this->rulesToBaterias);

                    //Validamos que la informacion del productos sea valida.    
                    $request->validate($this->rulesToProdcuto);
                    $producto->nombre = 'Bateria - '.$producto->nombre;

                    $newBateria = new batertiaModel();
                    $newBateria->idBateria = $producto->idProducto;
                    $newBateria->idMarca = $request->idMarca;
                    $newBateria->alto = $request->alto;
                    $newBateria->ancho = $request->ancho;
                    $newBateria->largo = $request->largo;
                    $newBateria->amperes = $request->amperes;
                    $newBateria->peso = $request->peso;
                    $newBateria->modelo = $request->modelo;
                    $newBateria->voltaje = $request->voltaje;
                    $newBateria->save();
                    $producto->saveOrFail();
                }
                break;
            case 'rin': {
                    //Validadmos la informacion de rin
                    $request->validate($this->rulesRin);

                    //Validamos que la informacion del productos sea valida.    
                    //$request->validate($this->rulesToProdcuto);

                    $newRin = new RinModel();
                    $newRin->idRin =  $producto->idProducto;
                    $newRin->numero = $request->numeroRin;
                    $newRin->save();
                    //$producto->saveOrFail();
                }
                break;
        }
        Session::flash('message_save', '¡Producto guardado con éxito!');
        //Campos del a tabla 
        // $producto->tipo = Str::upper($request->input('tipo'));
        // $name_camera= $producto->modelo;
        return redirect()->route("productos.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $product
     * @return \Illuminate\Http\Response
     */

    // Retorna la vista Mostrar Productos.
    public function show(Producto $producto)
    {



        if ($producto->id == null) {

            return view('errors.404');
        }

        return view('productos.productos_show', ["producto" => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto $product
     * @return \Illuminate\Http\Response
     */

    /*
    Retorna la vista Editar producto
     */
    public function edit($producto)
    {
        $productoTemp = Producto::where('idProducto', '=', $producto)
            ->where('deleted_at', null)->get()[0];
        $productoTemp->tipo = '';

        $bateria = null;
        $llanta = null;
        $rin = null;
        if (batertiaModel::find($productoTemp->idProducto) != null) {
            //El producto existe en la tabla de baterias
            $productoTemp->tipo = 'Bateria';
            $bateria = batertiaModel::find($productoTemp->idProducto);
        }
        if (llantaModel::find($productoTemp->idProducto) != null) {
            //El producto existe en la tabla de baterias
            $productoTemp->tipo = 'LLanta';
            $llanta = llantaModel::find($productoTemp->idProducto);
        }
        if (RinModel::find($productoTemp->idProducto) != null) {
            $productoTemp->tipo = 'Rin';
            $rin = RinModel::find($productoTemp->idProducto);
        }





        return view('productos.productos_edit', [
            "producto" => $productoTemp,
            "bateria" => $bateria,
            "llanta" => $llanta,
            "rin" => $rin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $product
     * @return \Illuminate\Http\Response
     */

    /*  Esta funcion nos sirve para modificar un producto
    e inclusive para mostrar el producto, una vez modificado el
    producto se muestra un mensaje y redirecciona al usuario a la vista
    de inventario.

     */
    public function update(Request $request, Producto $producto)
    {
        // $request->validate(
        //     [
        //         'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
        //         'descripcion' => 'required|regex:/[\pL\s\-."+0-9]+$/u', // regex Solo: incluye algunos carcateres
        //         'modelo' => 'unique:product',
        //         'tipo' => 'required',
        //         'precio_c' => 'required|numeric',
        //         'precio_v' => 'required|numeric',
        //         'stock' => 'required|numeric'
        //     ]);
        Session::flash('message_save', '¡Producto actualizado con éxtio!');

        //-> Guardar los cambios relizados en el prodcutos--tablas
        $producto->nombre = Str::upper($request->input('nombre'));
        $producto->descripcion = Str::upper($request->input('descripcion'));
        $producto->precioCompra = $request->precioCompra;
        $producto->PrecioVenta = $request->PrecioVenta;
        $producto->existencia = $request->existencia;
        $producto->idProveedor = $request->proveedor;

        if (strcmp($request->tipoProductoClasificacion, "LLanta") == 0) {
            //Si resulta ser una llanta.
            //Validamos que la informacion de la llanta sea valida.    
            //$request->validate($this->rulesToLlanta);

            //Validamos que la informacion del productos sea valida.    
            //$request->validate($this->rulesToProdcuto);

            $newLlanta = llantaModel::find($producto->idProducto);

            $newLlanta->idRin = $request->rin;
            $newLlanta->indiceCarga = $request->cargaMaxima;
            $newLlanta->velocidadMaxima = $request->velocidadMaxima;
            $newLlanta->presion = $request->presion;
            $newLlanta->ancho = $request->anchoLlanta;
            $newLlanta->diametro = $request->diametro;
            $newLlanta->Fabricante = $request->fabricante;
            //$tempYear = Carbon::create($request->aniofabricante, 0, 0);
            $newLlanta->anioFabricacion =  date('Y-m-d H:i:s',$request->aniofabricante);
            $newLlanta->tipoDeCarro = $request->tipoCarro;
            $newLlanta->marcasDeCarro = $request->marcaCarro;
            $newLlanta->save();
            $producto->saveOrFail();
        } else if (strcmp($request->tipoProductoClasificacion, "Bateria") == 0) {
            //Validamos que la informacion de la bateria sea valida.    
            //$request->validate($this->rulesToBaterias);

            //Validamos que la informacion del productos sea valida.    
            //$request->validate($this->rulesToProdcuto);

            //Es una bateria.
            $newBateria = batertiaModel::find($producto->idProducto);

            $newBateria->idMarca = $request->idMarca;
            $newBateria->alto = $request->alto;
            $newBateria->ancho = $request->ancho;
            $newBateria->largo = $request->largo;
            $newBateria->amperes = $request->amperes;
            $newBateria->peso = $request->peso;
            $newBateria->modelo = $request->modelo;
            $newBateria->voltaje = $request->voltaje;
            $newBateria->save();

            $producto->saveOrFail();
        } else {

            //Validadmos la informacion de rin
            //$request->validate($this->rulesRin);

            //Validamos que la informacion del productos sea valida.    
            //$request->validate($this->rulesToProdcuto);
 
            $updateRin = RinModel::find($producto->idProducto);
            $updateRin->numero = $request->numeroRin;
            $updateRin->save();
            $producto->saveOrFail();
        }
        return redirect()->route("productos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */

    /* Esta función elimina un producto (pero no de la bdd)
    por cuestiones de seguiridad , una vez eliminado el producto se
    dirige a la vista principal de inventarios.
     */
    public function destroy(Producto $producto)
    {
        Session::flash('message_delete', '¡Producto borrado con éxito!');
        $producto->delete();
        return redirect()->route("productos.index");
    }
}
