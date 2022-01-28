<?php

namespace App\Http\Controllers;


use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Devolucion;

use App\Models\DetalleVenta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class DevolucionesController extends Controller
{
    public function index(Request $request){
        $buscar = $request->get('buscarpor');
        $tipo = $request->get('type');
        $variablesurl = $request->all();
        $devoluciones = Devolucion::buscarpor($tipo,Str::upper($buscar))->paginate(5)->appends($variablesurl);
        return view('devoluciones.index',compact('devoluciones'));
    }
    public function delete(Request $request){
        $devolucionTemp = new Devolucion();
        $devolucionTemp->idVenta = $request->input("inidVenta");
        $devolucionTemp->observacion = $request->input("motivo");
        $devolucionTemp->save();
        $detalle1 = DetalleVenta::WHERE('idVenta',$request->input("inidVenta"))->delete();
        $venta = Venta::WHERE('idVenta',$request->input("inidVenta"))->delete();
        
        //Session::flash('message_delete', '¡Producto cancelado con éxito!');
        //$venta = Venta::findOrFail($id);
        //$venta->delete();       
        return redirect()->route('venta.index');
    }
}
