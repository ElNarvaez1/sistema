
<?php $__env->startSection('titulo', 'Editar Producto'); ?>
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
                <h1 class="h3 mb-2 bold-title"> EDITAR PRODUCTO <i class="fas fa-user-edit mx-3"></i> </h1>
                <p class="mb-4 text-dark">Verifique los datos de su producto aquí.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">ID producto: <?php echo e($producto->idProducto); ?></h6>
                    </div>

                    

                    <div class="container">

                        <form method="POST" action="<?php echo e(route('productos.update', $producto->idProducto)); ?>" enctype="multipart/form-data">
                            <?php echo method_field("PUT"); ?>
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Imagen  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-9 mt-4">
                                    <img class="img-fluid border-image" src="<?php echo e($producto->imagen); ?>" height="200px" width="300px" alt="">
                                </div>
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Nombre  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-auto ">
                                    <div class="form-group">
                                        <label class="text-black h4">Nombre del producto</label>
                                        <input type="text" name="nombre" value="<?php echo e(old('nombre', $producto->nombre)); ?>" placeholder="Introduce el ombre del producto" class="form-control text-upper" name="nombre">
                                        
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
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Existencia  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-auto">
                                    <div class="form-group">
                                        <label class="text-black h4">Existencia</label>
                                        <input type="number" name="existencia" value="<?php echo e(old('stock', $producto->existencia)); ?>" placeholder="En existencia" class="form-control text-upper" min="1" name="existencia">
                                        
                                        <?php $__errorArgs = ['existencia'];
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
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Descripcion  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Descripción</label>
                                        <textarea class="form-control text-upper" name="descripcion"><?php echo e(old('descripcion', $producto->descripcion)); ?></textarea>
                                        
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
                                        

                                        
                                        
                                        <input type="text" value="<?php echo e(old('',$producto->modelo)); ?>" placeholder="Modelo" class="form-control text-upper" disabled>

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
                                        

                                        <input type="text" value="<?php echo e(old('tipo', $producto->tipo)); ?>" placeholder="Modelo" class="form-control text-upper" name="tipo" disabled>
                                        
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
                                        <input type="text" name=" precioCompra" value="<?php echo e(old(' precioCompra', $producto-> precioCompra)); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper" name="precio">
                                        
                                        <?php $__errorArgs = [' precioCompra'];
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
                                        <input type="text" name="PrecioVenta" value="<?php echo e(old('PrecioVenta', $producto->PrecioVenta)); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper" name="precio">

                                        
                                        <?php $__errorArgs = ['PrecioVenta'];
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

                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Agregar imagen</label>

                                        
                                        <small class="text-dark"> <input type="checkbox" class="check-input mx-3" name="check" <?php if(old('check')=="on" ): ?> checked <?php endif; ?>>¿Desea modificar la imagen? active aqui.</small>
                                        <?php if(old('check')=="on"): ?>

                                        <input type="file" accept="image/*" name="imagen" placeholder="Inserte una imagen" class="form-control text-upper">
                                        

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

                                        <?php endif; ?>





                                    </div>
                                </div>

                            </div>

                            
                            <div class="row justify-content-center mt-4">
                                <div class="col-auto">
                                    <button title="guardar producto" type="submit" class="btn btn-primary btn-ms">
                                        Guardar <i class="fas fa-save"></i></button>
                                </div>
                                <div class="col-auto">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
                                    <a title="cancelar" href=<?php echo e(route('productos.index')); ?> class="btn btn-danger btn-ms">cancelar
                                        <i class="fas fa-strikethrough"></i></a>
                                    <?php endif; ?>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/productos_edit.blade.php ENDPATH**/ ?>