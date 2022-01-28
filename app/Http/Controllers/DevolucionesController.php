<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevolucionesController extends Controller
{
    public function delete($idVenta){
        $detalle1 = DetalleVenta::WHERE('idVenta',$idVenta)->delete();
        $venta = Venta::WHERE('idVenta',$idVenta)->delete();
        //Session::flash('message_delete', '¡Producto cancelado con éxito!');
        //$venta = Venta::findOrFail($id);
        //$venta->delete();
        $idVentaTemp = $idVenta;
        return view("");
    }
}
