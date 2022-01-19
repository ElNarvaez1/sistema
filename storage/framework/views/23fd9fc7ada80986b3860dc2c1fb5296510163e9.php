
<?php $__env->startSection('titulo', 'Ver Producto'); ?>
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
                    <h1 class="h3 mb-2 bold-title"> MOSTRAR PRODUCTO <i class="fas fa-eye mx-3"></i></h1>
                    <p class="mb-4 text-dark">Verifique los datos de su producto aquí.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">ID PRODUCTO: <?php echo e($producto->id); ?></h6>
                        </div>

                        

                        <div class="container">
                           
                            <form method="POST" action="<?php echo e(route('productos.update', [$producto])); ?>" class="container">
                                <?php echo method_field("PUT"); ?>
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-md-4 mt-4">
                                            <img class="img-fluid rounded" src="<?php echo e($producto->imagen); ?>" width="300px" height="200px" alt="">
                                    </div>

                                    <div class="col-md-4 mt-auto ">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre del producto</label>
                                            <input type="text" disabled="true" value="<?php echo e($producto->nombre); ?>"
                                                placeholder="Introduce el nombre del producto" class="form-control"
                                                name="nombre" required value="">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-auto">
                                        <div class="form-group">
                                            <label class="text-black h4">Existencia</label>
                                            <input type="number" disabled="true" value="<?php echo e($producto->stock); ?>"
                                                placeholder="En existencia" class="form-control" name="stock">
                                        </div>
                                    </div>

                                    <div class="col-md-8 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Descripción</label>
                                            <textarea class="form-control" disabled="true"
                                                name="descripcion"><?php echo e($producto->descripcion); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Modelo</label>
                                            <?php ($modelos = ['HFW1200TA28', 'PB401', 'IP66', 'SMARTCAM', 'ONVIF', 'IP67',
                                                'XVR1A04', 'S8-TURBO-L', 'XVR5104HE-X1', 'DH-XVR1A04', 'XVR1A08',
                                                'DS-7104HGHI-F1(S)', 'EV4016TURBO', 'S16 TURBO', 'CCTV BNC VIDEO', 'CCTV UTP']); ?>

                                                <select class="form-control" disabled="true" name="modelo">
                                                    <option disabled>modelo</option>
                                                    <?php $__currentLoopData = $modelos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php if($producto->modelo == $mod): ?> selected <?php endif; ?>><?php echo e($mod); ?>

                                                        </option>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-4 mt-4">
                                            <div class="form-group">
                                                <label class="text-black h4">Tipo</label>
                                                <?php ($tipos = ['IP', 'SEGURIDAD', 'BULLET', 'DOMO', '8 CANALES', '4 CANALES',
                                                    '16 CANALES', 'P/TRANSMISION DE VIDEO']); ?>
                                                    <select class="form-control" id="tipo" name="tipo" disabled="true">
                                                        <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if($producto->tipo == $type): ?> selected <?php endif; ?>><?php echo e($type); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Precio compra</label>
                                                    <input type="text" disabled="true" value="<?php echo e($producto->precio_c); ?>"
                                                        placeholder="Introduce precio del producto 0.0 $" class="form-control"
                                                        name="precio" required value="">
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Precio venta</label>
                                                    <input type="text" disabled="true" value="<?php echo e($producto->precio_v); ?>"
                                                        placeholder="Introduce precio del producto 0.0 $" class="form-control"
                                                        name="precio" required value="">
                                                </div>
                                            </div>

                                        </div>

                                        
                                        <div class="row justify-content-center mt-4">
                                            <div class="col-auto">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.edit')): ?>
                                                <a title="ir a editar" href="<?php echo e(route('productos.edit', [$producto])); ?>" class="btn btn-primary btn-ms">
                                                    ir a editar <i class="fas fa-pen-square"></i> </a>
                                                    <?php endif; ?>
                                                </div>
                                            <div class="col-auto">
                                                <a title="cancelar" href=<?php echo e(route('productos.index')); ?> class="btn btn-danger btn-ms">cancelar
                                                    <i class="fas fa-strikethrough"></i></a>
                                            </div>
                                        </div>
                                        <br>
                                    </form>
                                   
                                </div>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/baterias_show.blade.php ENDPATH**/ ?>