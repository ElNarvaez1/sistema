<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-10 ">
                <h1>Llantero de Oaxaca</h1>
               
            </div>
            
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-10">
                <h1 class="h6">nombre del empleado</h1>
               
            </div>
            <div class="col-xs-2 text-center">
              
               <strong>Fecha: </strong> <?php echo e($ventas[0]->fecha); ?>

          
               
            </div>
        </div>
        <hr>
        <div class="row text-center" style="margin-bottom: 2rem;">
            <div class="col-xs-6">
                
            </div>
            <div class="col-xs-6">
                <h1 class="h2"> Ticket</h1>
               
                <!--<strong>CLiente: </strong> <?php echo e($ventas[0]->nombre); ?> -->
               
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-condensed table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ARTICULO</th>
                            <th>CANTIDAD</th>
                            <th>DESCUENTO</th>
                            
                        </tr>
                    </thead>
                    <tbody><tfoot>
                        <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="table-bordered">
                            
                        <!--<td  class="text-center"><?php echo e($venta->articulo); ?></td>
                           <td  class="text-center"><?php echo e($venta->cantidad); ?></td>-->
                           <td class="text-right"><?php echo e($venta->descuento); ?> %</td>
                            
                          <tr>
                            <td colspan="2" class="text-right">
                              <h5>Total a pagar </h5>
                          </td>   
                            <td  class="text-right">
                             $ <?php echo e(number_format($venta->totalVenta,2, '.', '')); ?> MXN
                          </td>
                      
                      </tr>
                           
                              

                            </tfoot>
                       
                       
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p class="h4">¡Gracias por su compra!</p>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\sistema\resources\views/sales/ticketPDF.blade.php ENDPATH**/ ?>