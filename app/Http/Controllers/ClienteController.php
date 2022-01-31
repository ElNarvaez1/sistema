<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
class ClienteController extends Controller
{

    public function __construct(){
        $this->middleware('can:client.index')->only('index');
        $this->middleware('can:client.create')->only('create');
    }
    
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
        $clientes = Cliente::buscarpor($tipo,Str::upper($buscar))->paginate(5)->appends($variablesurl);
        return view("clients.index", compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                //'idCliente' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                //'direccion' => 'required|regex:/[\pL\s\-"+0-9]+.$/u', // regex Solo: incluye algunos carcateres
                //'correo' => 'required|email',
                'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u',
               
            ]
        );
        Session::flash('message_save', '¡Cliente guardado con éxito!');

        $llavePrimaria = "CLI-".
        strtoupper($request->apellidoPaterno[0]).
        strtoupper($request->apellidoPaterno[1]).
        strtoupper("-".$request->apellidoMaterno[0]).
        strtoupper($request->apellidoMaterno[1]).
        strtoupper($request->telefono[4]).
        strtoupper($request->telefono[5]).date('Y-m-d H:i:s');

        $cliente = new Cliente($request->input());
        $cliente ->idCliente = $llavePrimaria;
        $cliente ->nombre =Str::upper($request->input('nombre'));
        $cliente ->apellidoPaterno =Str::upper($request->input('apellidoPaterno'));
        $cliente ->apellidoMaterno =Str::upper($request->input('apellidoMaterno'));
        $cliente ->telefono =Str::upper($request->input('telefono'));
        //$cliente ->direccion ="dededede";
        

        $cliente -> saveOrFail();
        return redirect()->route("clientes.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        
        if($cliente->id == null){
          
            return view('errors.404');
        }

        return view('clients.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $idCliente)
    {
        $clientes = cliente::WHERE('idCliente',$idCliente)->get();
        $cliente;
        foreach($clientes as $clie){
            $cliente=$clie;
        }
        return view('clients.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idCliente)
    {
        $request->validate(
            [
                //'idCliente' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                //'direccion' => 'required|regex:/[\pL\s\-"+0-9]+.$/u', // regex Solo: incluye algunos carcateres
                //'correo' => 'required|email',
                'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u',
               
            ]
        );
        $nombre =Str::upper($request->input('nombre'));
        $apellidoPaterno =Str::upper($request->input('apellidoPaterno'));
        $apellidoMaterno =Str::upper($request->input('apellidoMaterno'));
        //$cliente ->$correo =Str::upper($request->input('correo'));
        $telefono =Str::upper($request->input('telefono'));
        //$cliente ->direccion =Str::upper($request->input('direccion'));
        Cliente::WHERE('idCliente',$idCliente)->update(['nombre'=>$nombre,'apellidoPaterno'=>$apellidoPaterno,'apellidoMaterno'=>$apellidoMaterno,
        'telefono'=>$telefono]);
         //$cliente->update($request->input());
        Session::flash('message_save', '¡Cliente actualizado con éxito!');
        //$cliente->save();
        
        return redirect()->route("clientes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCliente)
    {
        $cliente = cliente::WHERE('idCliente',$idCliente)->delete();
        Session::flash('message_delete', 'Cliente borrado con éxito!');
       return redirect()->route('clientes.index');
    }
}
