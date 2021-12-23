
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
                <?php echo e(route('bateria.destroy','aX-221221')); ?>    
            <?php echo csrf_field(); ?>
                <br>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 bold-title"> REGISTRAR BATERÍA <i class="fas fa-plus-circle mx-3"></i> </h1>
                <p class="mb-4 text-dark">Registre su batería aquí.</p>

                
                <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">Agregar bateria</h6>
                    </div>

                    


                    <div class="container">

                        <form method="POST" action="<?php echo e(route('bateria.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <!--
                                    Productos
                                        -> idProveedor  
                                        -> nombre       *
                                        -> descripcion  *
                                        -> imagen       * 
                                        -> precioCompra *
                                        -> PrecioVenta  *
                                        -> existencia   *
                                    Bateria
                                        -> idMarca      *
                                        -> tamanio      *
                                        -> modelo       *
                                        -> voltaje
                                    -->
                                <!--------------------------Inputs de la informacion NOMBRE-------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Nombre</label>
                                        <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>" placeholder="" class="form-control text-upper">
                                        
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
                                <!--------------------------Inputs de la informacion PROVEEDOR -------------------------->
                                <!--
                                    PHP tempral ajajajaj no sabia donde ponerlo
                                -->
                                <?php (
                                    $proveedores = App\Models\Proveedor::all()
                                ); ?>
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">ID Proveedor</label>
                                        <select name="proveedor" value="<?php echo e(old('proveedor')); ?>" id="" class="form-control text-upper">
                                            <option value="0">Seleccione un proveedor</option>
                                            <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($proveedor->id); ?>"><?php echo e($proveedor->nombre); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        
                                        <?php $__errorArgs = ['proveedor'];
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

                                <!--------------------------Inputs de la informacion MODELO-------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Modelo</label>
                                        <input type="text" name="modelo" value="<?php echo e(old('modelo')); ?>" placeholder="" class="form-control text-upper">
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
                                <!--------------------------Inputs de la informacion IMAGEN-------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Imagen</label>
                                        <input type="file" name="imageFile" value="" class="form-control text-upper">
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
                                <!--------------------------Inputs de la informacion PRECIO COMPRA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio compra $</label>
                                        <input type="number" name="precio_c" value="<?php echo e(old('precio_c')); ?>" placeholder="" class="form-control text-upper">
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
                                <!--------------------------Inputs de la informacion PRECIO VENTA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio venta</label>
                                        <input type="number" name="precio_v" value="<?php echo e(old('precio_v')); ?>" placeholder="$" class="form-control text-upper">
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
                                <!--------------------------Inputs de la informacion EXISTENCIA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Existencia</label>
                                        <input type="number" name="existencia" value="<?php echo e(old('stock')); ?>" placeholder="" class="form-control text-upper" min="1">
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
                                <!--------------------------Inputs de la informacion MARCA -------------------------->
                                <?php ($marcasLlantas = DB::table('marca_baterias')->get() ); ?>
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca</label>
                                        <select name="idMarca" id="selectorMarca" class="form-control form-select">
                                            <option value="0">Seleccionar</option>
                                            <?php $__currentLoopData = $marcasLlantas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($marca->idMarca); ?>"><?php echo e($marca->nombre); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion TAMANIO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Tamaño</label>
                                        <input type="number" name="tamanio" value="<?php echo e(old('stock')); ?>" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion VOLTAJE -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Voltaje</label>
                                        <input type="number" name="voltaje" value="<?php echo e(old('stock')); ?>" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion DESCRIPCION-------------------------->
                                <div class="col-md-8 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Descripción</label>
                                        <textarea class="form-control text-upper" placeholder="" name="descripcion"><?php echo e(old('descripcion')); ?></textarea>
                                        
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

                            </div>

                            

                            <div class="row justify-content-center mt-4">
                                <div class="col-auto">
                                    <button title="guardar producto" type="submit" class="btn btn-success btn-ms">
                                        Guardar <i class="fas fa-save"></i></button>
                                </div>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
                                <div class="col-auto">
                                    <a title="cancelar producto" href="./" class="btn btn-primary btn-ms">Regresar
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/baterias/baterias_add.blade.php ENDPATH**/ ?>