
<?php $__env->startSection('titulo', 'Ver citas'); ?>
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
                    <h1 class="h3 mb-2 bold-title text-upper"> Pedidos <i class="fas fa-clipboard-list"></i></h1>

                    <p class="mb-4 text-dark">Consulte los datos de pedidos aquí.</p>


                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de pedidos por tiipo</h6>
                        </div>


                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                <form action="<?php echo e(route('pedido.index', [$pedidos])); ?>" method="GET">
                                    <div class="row justify-content-md-center">
             

                                        <div class="col-md-auto pt-3">
                                            <div class="form-group">
                                                <?php ($arrayB = [
                                                    'nombre',
                                                    'productos',
                                                    'direccion',
                                                    'telefono',
                                                    'fecha'
                                                    // 'PRECIO COMPRA','PRECIO VENTA'
                                                    ]); ?>
                                                    <select title="buscar por" class="form-control text-upper" name="tipos">
                                                        <?php $__currentLoopData = $arrayB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buscar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option><?php echo e($buscar); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-auto pt-3">
                                                <div class="form-group">
                                                    <input class="form-control" name="buscar" type="search"
                                                        placeholder="Buscar">

                                                </div>
                                            </div>


                                            <div class="col-md-auto pt-3">
                                                <div class="form-group">
                                                    <button title="buscar pedido" class="btn btn-outline-primary text-black2"
                                                        type="submit">Buscar</button>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                            <?php if($pedidos->count()): ?>)
                            <div class="card-body ">
                                <div class="table-responsive">
                                    
                                    <table class="table  table-light" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">ID PEDIDO</th>
                                                <th scope="col">ID CLIENTE</th>
                                                <th scope="col">NOMBRE CLIENTE</th>
                                                <th scope="col">TOTAL VENTA</th>
                                                <th scope="col">PRODUCTOS</th>
                                                <th scope="col">DIRECCIÓN</th>
                                                <th scope="col">TELÉFONO</th>
                                                
                                                <th scope="col">FECHA</th>
                                            
                                                <th scope="col">BORRAR</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="table-hover">
                                                    <th scope="row"><?php echo e($pedido->id); ?></th>
                                                    <th scope="row"><?php echo e($pedido->id_cliente); ?></th>
                                                    <td>
                                                        

                                                            <?php echo e($pedido->nombre); ?>

                                                        
                                                    </td>

                                                    <td class="text-center">$ <?php echo e($pedido->total_venta); ?> MXN</td>
                                                    <td class="text-justify"><?php echo e($pedido->productos); ?></td>
                                                    <td class="text-center"><?php echo e($pedido->direccion); ?></td>
                                                    <td class="text-center"><?php echo e($pedido->telefono); ?></td>
                                                    <td class="text-center"><?php echo e($pedido->fecha); ?></td>
                                                    
                                                    
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pedido.destroy')): ?>
                                                        <form action="<?php echo e(route('pedido.destroy', $pedido->id)); ?>"
                                                            method="POST">
                                                            <?php echo method_field("delete"); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button title="borrar pedido" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                               
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                    <nav aria-label="Page navigation example float-right">
                                        <a href="<?php echo e(route('pedido.index')); ?>" class="btn btn-outline-primary mx-3 mt-3 " >refrescar</a>
                                        <ul class="pagination float-right mt-3">
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($pedidos->previousPageUrl()); ?>">Anterior</a></li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($pedidos->url(1)); ?>">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($pedidos->url(2)); ?>">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($pedidos->url(3)); ?>">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($pedidos->nextPageUrl()); ?>">Siguiente</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('pedido.index')); ?>" class="btn btn-outline-primary" >regresar</a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/pedidos/index.blade.php ENDPATH**/ ?>