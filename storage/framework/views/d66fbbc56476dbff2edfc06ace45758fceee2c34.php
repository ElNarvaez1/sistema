
<?php $__env->startSection('titulo', 'Ventas'); ?>
<?php $__env->startSection('contenido'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid rounded color">
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Ventas  <i class="fas fa-cart-arrow-down"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de sus ventas aquí.</p>
                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de ventas</h6>
                        </div>
    
                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                
                                
                                    <form action="<?php echo e(route('venta.index',[$sales])); ?>" method="GET">
                                    <div class="row">

                                        
                                        <div class="col-md-3 mt-4">
                                            <div class="form-group">
                                                <a title="agregar nuevo cliente" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"
                                                    href="<?php echo e(route('venta.create')); ?>"> 
                                                     nueva venta <i class="fas fa-cart-arrow-down"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 mt-4">
                                            <div class="form-group">
                                                <?php ($arrayB = [
                                                    ['idCliente','ID CLIENTE'],
                                                    ['fecha','FECHA'],
                                                    // 'PRECIO COMPRA','PRECIO VENTA'
                                                    ]); ?>
                                                    <select title="buscar por" class="form-control text-upper" name="type">
                                                        <?php $__currentLoopData = $arrayB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buscar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value=<?php echo e($buscar[0]); ?>><?php echo e($buscar[1]); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <input class="form-control" name="buscarpor" type="search"
                                                        placeholder="Buscar">

                                                </div>
                                            </div>


                                            <div class="col-md-3 mt-4">
                                                <div class="form-group">
                                                    <button title="buscar" class="btn btn-outline-primary text-black2"
                                                        type="submit">Buscar</button>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                  
                                </div>
                                
                            </div>
                            
                            <?php if($sales->count()): ?>)
                            <div class="card-body ">
                               <div class="table-responsive">
                                    
                                    <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">NUMERO</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">ARTICULO</th>
                                                <th scope="col">FECHA</th>
                                                <th scope="col">DESCUENTO</th>
                                                <th scope="col">TOTAL</th>
                                                <th scope="col" colspan="3">ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr class="table-hover">
                                                    <th scope="row"><?php echo e($venta->idVenta); ?></th>

                                                    <td>
                                                        

                                                            <?php echo e($venta->nombre); ?>

                                                        
                                                    </td>

                                                    <td class="text-center"><?php echo e($venta->idProducto); ?></td>
                                                    <td class="text-center"><?php echo e($venta->fecha); ?></td>
                                                    <td class="text-center"><?php echo e($venta->descuento); ?> %</td>
                                                    <td class="text-center"> $ <?php echo e($venta->totalVenta); ?></td>
                                                           

                                                    
                                                    <td>
                                                        
                                                        <a title="detalle venta" href="<?php echo e(route('venta.detalle_venta',$venta->idVenta)); ?>"
                                                            class="btn btn-outline-primary btn-circle">
                                                            <i class="fa fa-info-circle"></i></a>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                        <form action="<?php echo e(route('venta.delete', [$venta->idVenta])); ?>" 
                                                            method="post">
                                                            <?php echo method_field("delete"); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button title="Devolver" type="submit" class="btn btn-outline-danger btn-circle">
                                                                <i class="fa fa-reply-all"></i>
                                                            </button>
                                                        </form> 
                                                        
                                                    </td>


                                                    <td>
                                                        
                                                        
                                                            <a href="<?php echo e(route('venta.ticket', [$venta->idVenta])); ?>" target="_blank"
                                                            class="btn btn-outline-success btn-circle btn-download">
                                                               
                                                                <i class="fa fa-download"></i>
                                                            </a>
                                                      
                                                        
                                                    </td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <h3 class="text-black text-center"> ¡No hay registros!</h3>
                                     <?php endif; ?>
                                        </tbody>
                                    </table>

                                    <nav aria-label="Page navigation example float-right">
                                        <a href="<?php echo e(route('venta.index')); ?>" class="btn btn-outline-primary mx-3 mt-3 " >refrescar</a>
                                        <ul class="pagination float-right mt-3">
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($sales->previousPageUrl()); ?>">Anterior</a></li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($sales->url(1)); ?>">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($sales->url(2)); ?>">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($sales->url(3)); ?>">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($sales->nextPageUrl()); ?>">Siguiente</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('venta.index')); ?>" class="btn btn-outline-primary" >regresar</a>
                                    </div>
                                </div>
                                
                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        
                                            <strong class ="card-title">¡No hay registros!</strong>
                                       
                                    </div>
                                </div>
                            </div>
                               
                                
                                 </div>
                             <?php endif; ?>
                        
                        </div>
                        <br>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/sales/index.blade.php ENDPATH**/ ?>