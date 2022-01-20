<?php

namespace App\Http\Controllers;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Cart;
use DB;
use PDF;

class VentasController extends Controller
{
    //

    public function index(Request $request){

        $buscar = $request->get('buscarpor');
        $tipo = $request->get('type');
        $variablesurl = $request->all();
        $sales = Venta::buscarpor($tipo,Str::upper($buscar))->paginate(5)->appends($variablesurl);

        $nombre = Cliente::all();
        foreach ($sales as $nom) { 
            $nombres1=Cliente::where('idCliente','=',$nom->idCliente)->get();
            if(count($nombres1)>0){
            $nom->nombre=$nombres1[0]->nombre;
            }   
        }

        $produ = Producto::all();
        foreach ($sales as $nom1) { 
            $nombrepro=Producto::where('idProducto','=',$nom1->idProducto)->get();
            if(count($nombrepro)>0){
            $nom1->produ=$nombrepro[0]->nombre;
            }   
        }


        return view('sales.index', compact('sales'));
    }

    public function create(Request $request){
        // ver clientes
        
        

        $nombres = Cliente::query()
        ->select(['nombre','apellidoPaterno','apellidoMaterno'])
        ->get();
       
        $data = [];
        $data_names = "";
        foreach ($nombres as $key => $names) {

            $data_names =$data_names.$names->nombre." ".$names->apellidoPaterno." ".$names->apellidoMaterno;
            $data [] = $data_names;
            $data_names = "";
        }
        
        return view('sales.add', compact('data'));
    }
    public function add(Request $request){

        $request->validate(
            [
                'nombre' => 'required|regex:/^[\pL\s\-]+$/u', // regex solo letras
                //'impuesto' => 'required|numeric',
                'articulo' => 'required|regex:/^[\pL\s\-+0-9]+$/u',
                'cantidad' => 'required|numeric',
                'stock' => 'required|numeric',
                'descuento' => 'required|numeric',
                'pecio_venta' => 'required|numeric',
               
            ]
        );
        
        
        Cart::add(array(
            'id' => $request->input('cantidad'),
            'name' => $request->input('articulo'), // inique row ID
            'price' =>  number_format($request->input('pecio_venta'),2,'.', ''),
            'quantity' =>  $request->input('cantidad'),
            'attributes' => array(
                'descuento' => $request->input('descuento'),
                'impuesto' => '',
                'iva' => '',
                'total_pay' =>''
                
            )
        )
        );
       $iva =Cart::getSubTotal() * 
        ($request->get('impuesto')/100);  
        $impuesto = Cart::getSubTotal()+$iva;
        
        $total_pay = round($impuesto-$impuesto * (($request->get('descuento')/100)),2);
        Cart::update($request->input('cantidad'), array(
            'attributes' => array(
                'descuento' => $request->input('descuento'),
                'impuesto' => $impuesto,
                'iva' => $iva,
                'total_pay' =>$total_pay,
                'cliente' => $request->input('nombre'),
        )));
        

        Session::flash('message_save', "¡Producto agregado con éxito!");

        return redirect()->route('venta.create');
    }
    public function removeitem(Request $request)
    {

        // $producto = Producto::where('id',$request->id)->firstOrFail();
        Cart::remove(
            [
                'id' => $request->id,
            ]
        );
        Session::flash('message_delete', "¡se ha borrado del carrito!");
        return back();
    }
    public function clear(Request $request)
    {
        Cart::clear();
        Session::flash('message_delete', " ¡se a borrado el carrito correctamente!");

        return back();
    }
    public function payCart(Request $request){
       
        // comprobar cliente
        $data = Cliente::query()    
            ->select("idCliente",
            DB::raw("CONCAT(nombre, ' ',apellidoPaterno, ' ', apellidoMaterno) as nombre_completo")
            
        )   
        ->get();
       
      
        foreach (Cart::getContent() as $item) {
            
            $venta = new Venta();
            foreach ($data as $key => $cliente) {
                if($cliente->nombre_completo ==$item->attributes->cliente ){
                    $venta->idCliente=$cliente->idCliente;
                } 
                }
           //$venta ->idVenta = 'VEN-'.$venta->totalVenta.'-'.date('dmy');
           $venta ->idVenta = "VEN-".date('Y-m-d H:i:s');
           $venta->idUser = 'Admin';
           $venta->idProducto = $item->name;
           //$venta->nombre = $item->attributes->cliente;
           //$venta->articulo = $item->name;
           //$venta->cantidad = $item->quantity;
           //$venta->impuesto = $item->attributes->iva;
           $venta->descuento = $item->attributes->descuento; 
           $venta->totalVenta = $item->attributes->total_pay; 
           $detalle = new DetalleVenta();
           $detalle->idProducto = $venta->idProducto;
           $detalle->idVenta = $venta->idVenta;
           $detalle->cantidad = $item->quantity;
           $detalle->save();
        }
        $venta->saveOrFail();
        Cart::clear();
        Session::flash('message_save', "¡La compra se realizo con éxito!");
        
        return redirect()->route('venta.index');

    }
    public function detalle_venta($idVenta){

        //$ventas = Venta::findOrFail($idVenta);
        // dd($ventas);
        $ventas = Venta::WHERE('idVenta',$idVenta)->get();
        $Venta;
        foreach($ventas as $vente){
            $Venta=$vente;
        }
        return view('sales.detalle_sales',compact('ventas'));
    }

    public function delete($idVenta){
        $detalle1 = DetalleVenta::WHERE('idVenta',$idVenta)->delete();
        $venta = Venta::WHERE('idVenta',$idVenta)->delete();
        Session::flash('message_delete', '¡Producto cancelado con éxito!');
        //$venta = Venta::findOrFail($id);
        //$venta->delete();

        return redirect()->route("venta.index");
    }
    public function ticket_download($idVenta){

        $ventas = DB::table('ventas')->where('idVenta', '=',$idVenta)
        ->where('idVenta', "=",$idVenta)   
        ->get();
       
        // share data to view
         view()->share('sales.ticketPDF', $ventas);
        $pdf = PDF::loadView('sales.ticketPDF',compact('ventas'))
        ->setPaper('a4', 'landscape')->setWarnings(false);
        // $pdf- render();

    // download PDF file with download method
    return $pdf->stream("ticket.pdf",array('Attachment'=>false));
    }
}