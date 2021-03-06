<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\ProveedorCreateRequest;
use App\Models\Proveedor;
use DB;
class ProveedorController extends Controller
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
        $proveedores = Proveedor::buscarpor($tipo,Str::upper($buscar))->paginate(5)->appends($variablesurl);
        return view('proveedor.index',compact('proveedores'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //  crear nuevo provedor 
 public function store(ProveedorCreateRequest $request)
    {
        //VALIDACION
        $request->validate(
            [
                //'idProveedor' => 'required|regex:/^^[A-Z]{1}([AEIOU]{1})([A-Z]{2})([0-9]{2})(0[1-9]{1}|1[0-2]{1})([0-2]{1}[1-9]{1}|3(0|1))([0-9A-Z]{3})/gm', // regex solo letras

                'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                'nombreEmpresa' => 'required|regex:/^[\pL\s\-]+$/u',
                'direccion' => 'required|regex:/[\pL\s\-"+\#0-9]+.$/u', // regex Solo: incluye algunos carcateres
                'correo' => 'required|email',
                'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u',
               
            ]
        );
       Session::flash('message_save', '¡Proveedor guardado con éxito!');

       $llavePrimaria = "PROV-".
       strtoupper($request->apellidoPaterno[0]).
       strtoupper($request->apellidoPaterno[1]).
       strtoupper("-".$request->apellidoMaterno[0]).
       strtoupper($request->apellidoMaterno[1]).
       strtoupper($request->telefono[4]).
       strtoupper($request->telefono[5]).'-'.date('Y-m-d H:i:s');
        $proveedor = new Proveedor($request->input());
        
        $proveedor  ->idProveedor =$llavePrimaria;

        
        $proveedor  ->nombre =Str::upper($request->input('nombre'));
        $proveedor  ->apellidoPaterno =Str::upper($request->input('apellidoPaterno'));
        $proveedor  ->apellidoMaterno =Str::upper($request->input('apellidoMaterno'));
        $proveedor  ->nombreEmpresa =Str::upper($request->input('nombreEmpresa'));
        $proveedor  ->direccion =Str::upper($request->input('direccion'));
        $proveedor  ->correo=Str::upper($request->input('correo'));
        $proveedor  ->telefono=Str::upper($request->input('telefono'));
        //$proveedor ->save();

        $proveedor ->saveOrFail();
        return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        if($proveedor->id == null){
          

            return view('errors.404')->with('info','error');

        }

        return view('proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $idProveedor)
    {
        //$proveedor = Proveedor::find($idProveedor);
        $proveedores = Proveedor::WHERE('idProveedor',$idProveedor)->get();
        $proveedor;
        foreach($proveedores as $prove){
            $proveedor=$prove;
        }
        return view('proveedor.edit', compact('proveedor'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idProveedor)
    {
        
        
        //VALIDACION
      $request->validate(
            [
                
                'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                'apellidoPaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                'apellidoMaterno' => 'required|regex:/^[\pL\s\-]+$/u',
                'nombreEmpresa' => 'required|regex:/^[\pL\s\-]+$/u',
                'direccion' => 'required|regex:/[\pL\s\-"+\#0-9]+.$/u', // regex Solo: incluye algunos carcateres
                'correo' => 'required|email',
                'telefono' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/u',
               
            ]
        );
        $nombre= Str::upper($request->input('nombre'));
        $apellidoPaterno =Str::upper($request->input('apellidoPaterno'));
        $apellidoMaterno =Str::upper($request->input('apellidoMaterno'));
        $nombreEmpresa =Str::upper($request->input('nombreEmpresa'));
        $direccion =Str::upper($request->input('direccion'));
        $correo=Str::upper($request->input('correo'));
        $telefono=Str::upper($request->input('telefono'));
        Proveedor::WHERE('idProveedor',$idProveedor)->update(['nombre'=>$nombre,'apellidoPaterno'=>$apellidoPaterno,'apellidoMaterno'=>$apellidoMaterno,
        'nombreEmpresa'=>$nombreEmpresa ,'direccion'=>$direccion ,'correo'=>$correo,'telefono'=>$telefono]);
        
        Session::flash('message_save', '¡Proveedor actualizado con éxito!');
        
      
        
        

       
        return redirect()->route('proveedor.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProveedor)
    {
        
         $proveerdor = Proveedor::WHERE('idProveedor',$idProveedor)->delete();
         Session::flash('message_delete', 'Proveedor borrado con éxito!');
        return redirect()->route('proveedor.index');
       
       
    }


}
