<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-10 text-end aling-text-right">
                <h3>Llantero de Oaxaca</h3>
            </div>
            <div class="aling-text-right">
                <img src="https://wallpapercave.com/uwp/uwp1581891.jpeg" alt="Llantero"
                    width="100" height="100" class="d-inline-block text-end" align="right"> 
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-10">
                <h1 class="h6">Nombre del empleado: {{ Auth::user()->name }}</h1>
               
            </div>
            <div class="col-xs-2 text-center">
              
               <strong>Fecha: </strong> {{ $ventas[0]->fecha }}
          
               
            </div>
        </div>
        <div class="row text-center" style="margin-bottom: 2rem;">
            <div class="col-xs-6">
                
            </div>
            <div class="col-xs-6">
                <h1 class="h2"> Ticket</h1>
                <strong>Cliente: </strong> {{ $ventas[0]->idCliente}}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-condensed table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ARTÍCULO</th>
                            <th>CANTIDAD</th>
                            <th>SUBTOTAL ($)</th>
                            <th>DESCUENTO (%)</th>
                        </tr>
                    </thead>
                    <tbody><tfoot>
                        @foreach ($ventas as $venta)
                        <tr class="table-bordered">
                            
                        <td  class="text-center">{{ $venta->idProducto }}</td>
                           <td  class="text-center">{{ $venta->cantidad }}</td>
                           <td  class="text-center">${{ $venta->subVenta }} MXN</td>
                           <td class="text-right">{{ $venta->descuento }} %</td>
                            
                          <tr>
                            <td colspan="3" class="text-right">
                              <h5>Total a pagar </h5>
                          </td>   
                            <td  class="text-right">
                             $ {{ number_format($venta->totalVenta,2, '.', '') }} MXN
                          </td>
                      
                      </tr>
                           
                              

                            </tfoot>
                       
                       
                 @endforeach
                </tbody>
            
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p class="h4">¡Gracias por su compra!</p>
            </div>
            <div class="col-xs-12 text-justify">
                <br>
                <p class="h7">Políticas de devolucion</p>
                <p class="h7">El Cliente, deberá presentar la nota de venta para solicitar la devolución en sucursal.
                    El Cliente deberá regresar la mercancía bajo su propio costo a más tardar 1 semana, después de realizar la compra.
                    No se aceptan productos cuyo mal estado NO sea causado por el local o sus empleados, ya que de no ser así; no se aceptarán reclamos ni devoluciones en el producto.
                    El llantero de Oaxaca, se reserva el derecho de admitir Devoluciones que queden al margen de las cláusulas anteriormente expuestas.</p>
            </div>
        </div>
    </div>
</body>

</html>