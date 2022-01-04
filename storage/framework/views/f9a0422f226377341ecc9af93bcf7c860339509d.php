
<?php $__env->startSection('titulo', 'Agregar Producto'); ?>
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
                <?php echo csrf_field(); ?>
                <br>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 bold-title"> REGISTRAR PRODUCTO <i class="fas fa-plus-circle mx-3"></i> </h1>
                <p class="mb-4 text-dark">Registre su producto aquí.</p>


                
                <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">Agregar producto</h6>
                    </div>

                    


                    <div class="container">

                        <form method="POST" action="<?php echo e(route('cambiollantas.store')); ?>" enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <!--
                                idProducto
idProveedor


imagen
precioCompra
PrecioVenta
existencia
idProducto

                                -->
            <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  NOMBRE     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Nombre del producto</label>
                                        <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>" placeholder="Introduce el nombre del producto" class="form-control text-upper">
                                        
                                        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>


            <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  DESCRIPCION     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Descripción</label>
                                        <textarea class="form-control text-upper" placeholder="Descripción del producto..." name="descripcion"><?php echo e(old('descripcion')); ?></textarea>

                                        
                                        <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Modelo</label>
                                        

                                        
                                        
                                        <input type="text" name="modelo" value="<?php echo e(old('modelo')); ?>" placeholder="Introduce el modelo del producto" class="form-control text-upper">
                                        <?php $__errorArgs = ['modelo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Tipo</label>
                                        

                                        <input type="text" name="tipo" value="<?php echo e(old('tipo')); ?>" placeholder="Introduce el tipo del producto" class="form-control text-upper">

                                        
                                        <?php $__errorArgs = ['tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Precio compra $</label>
                                        <input type="text" name="precio_c" value="<?php echo e(old('precio_c')); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper">

                                        
                                        <?php $__errorArgs = ['precio_c'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Precio venta $</label>
                                        <input type="text" name="precio_v" value="<?php echo e(old('precio_v')); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper">

                                        
                                        <?php $__errorArgs = ['precio_v'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    </div>
                                </div>


                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Existencia</label>
                                        <input type="number" name="stock" value="<?php echo e(old('stock')); ?>" placeholder="En existencia" class="form-control text-upper" min="1">

                                        
                                        <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Agregar imagen</label>

                                        <!-- Upload image input-->

                                        <input type="file" name="imagen" accept="image/*" placeholder="Inserte una imagen" class="form-control text-upper">


                                        
                                        <?php $__errorArgs = ['imagen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>


                            </div>

                            

                            <div class="row justify-content-center mt-4">
                                <div class="col-auto">
                                    <button title="guardar producto" type="submit" class="btn btn-success btn-ms">
                                        Guardar <i class="fas fa-save"></i></button>
                                </div>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
                                <div class="col-auto">
                                    <a title="cancelar producto" href=<?php echo e(route('productos.index')); ?> class="btn btn-primary btn-ms">Regresar
                                        <i class="fas fa-strikethrough"></i></a>
                                </div>
                                <?php endif; ?>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/productos_add.blade.php ENDPATH**/ ?>