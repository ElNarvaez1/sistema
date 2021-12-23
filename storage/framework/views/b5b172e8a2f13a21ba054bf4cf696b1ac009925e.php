
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
                <h1 class="h3 mb-2 bold-title"> REGISTRAR LLANTA <i class="fas fa-plus-circle mx-3"></i> </h1>
                <p class="mb-4 text-dark">Registre su mueva llanta.</p>


                
                <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">Agregar llantas</h6>
                    </div>

                    


                    <div class="container">

                        <form method="POST" action="<?php echo e(route('llantas.update',$llanta->idLlanta)); ?>" enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">

                                <!--############################################# INPUTS ############################################################################################################-->
                                                                    <!--------------------------Inputs de la informacion NOMBRE-------------------------->
                                                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Nombre</label>
                                            <input type="text" name="nombre" value="<?php echo e($llanta->nombre); ?>"
                                                placeholder="" class="form-control text-upper">
                                            
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
                                    <!--------------------------Inputs de la informacion MODELO-------------------------->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Modelo</label>
                                            <input type="text" name="modelo" value="<?php echo e($llanta->modelo); ?>"
                                                placeholder="" class="form-control text-upper">
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
                                            <input type="file" name="imageFile" value="<?php echo e($llanta->imageFile); ?>" class="form-control text-upper">
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
                                            <input type="number" name="precio_c" value="<?php echo e($llanta->precio_c); ?>"
                                                        placeholder="" class="form-control text-upper">
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
                                            <input type="number" name="precio_v" value="<?php echo e($llanta->precio_v); ?>"
                                                        placeholder="$" class="form-control text-upper">
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
                                            <input type="number" name="existencia" value="<?php echo e($llanta->existencia); ?>"
                                                        placeholder="" class="form-control text-upper" min="1">
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
                                <!-----------------------INPUTS DE ID *Id de la llanta*---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Id de la llanta</label>
                                        <input type="text" name="idLlanta" value="<?php echo e($llanta->idLlanta); ?>" disabled placeholder="Introduce el nombre del producto" class="form-control text-upper">
                                        
                                        <?php $__errorArgs = ['idLlanta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="message-error">* <?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *carga Maxima* ---------------------------------------------->

                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Carga Maxima</label>
                                        <input type="number" name="cargaMaxima" id="idcargaMaxima" value="<?php echo e($llanta->cargaMaxima); ?>" class="form-control text-upper">
                                        <?php $__errorArgs = ['cargaMaxima'];
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

                                <!----------------------- CAJA DE TEXTO *velocidad Maxima* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">velocidad Maxima</label>
                                        <input type="number" name="stock" value="<?php echo e($llanta->stock); ?>" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['velocidadMaxima'];
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
                                <!----------------------- CAJA DE TEXTO *Media* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Medida</label>
                                        <input type="number" name="medida" value="<?php echo e($llanta->medida); ?>" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['medida'];
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
                                <!----------------------- CAJA DE TEXTO ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Presion</label>
                                        <input type="number" name="presion" value="<?php echo e($llanta->presion); ?>" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['presion'];
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
                                    <a title="cancelar producto" href="../" class="btn btn-primary btn-ms">Regresar
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/llantas/llantas_edit.blade.php ENDPATH**/ ?>