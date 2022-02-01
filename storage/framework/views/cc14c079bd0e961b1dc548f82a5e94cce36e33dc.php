
<?php $__env->startSection('titulo', 'Agregar cliente'); ?>
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
                    <h1 class="h3 mb-2 bold-title"> REGISTRAR CLIENTE <i class="fas fa-plus-circle mx-3"></i> </h1>
                    <p class="mb-4 text-dark">Registre un nuevo cliente aquí.</p>


                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">Agregar cliente</h6>
                        </div>

                        

                        
                        <div class="container">
                           
                            <form method="POST" action="<?php echo e(route('clientes.store')); ?>" enctype="multipart/form-data">

                                <?php echo csrf_field(); ?>
                                <div class="row">



                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre del cliente*</label>
                                            <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>"
                                                placeholder="Nombre del cliente"
                                                class="form-control text-upper">
                                            
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


                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Apellido Paterno*</label>
                                            <input type="text" name="apellidoPaterno" value="<?php echo e(old('apellidoPaterno')); ?>"
                                                placeholder="Apellido paterno"
                                                class="form-control text-upper">
                                            
                                            <?php $__errorArgs = ['apellidoPaterno'];
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
                                            <label class="text-black h4">Apellido Materno*</label>
                                            <input type="text" name="apellidoMaterno" value="<?php echo e(old('apellidoMaterno')); ?>"
                                                placeholder="Apellido materno"
                                                class="form-control text-upper">
                                            
                                            <?php $__errorArgs = ['apellidoMaterno'];
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
                                                    <label class="text-black h4">Teléfono*</label>
                                                    <input type="text" name="telefono" value="<?php echo e(old('telefono')); ?>"
                                                        placeholder="teléfono "
                                                        class="form-control text-upper">

                                                    
                                                    <?php $__errorArgs = ['telefono'];
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
                                                <button title="guardar datos" type="submit" class="btn btn-primary btn-ms">
                                                    Guardar <i class="fas fa-save"></i></button>
                                            </div>
                                            
                                            <div class="col-auto">
                                                <a title="cancelar producto" href=<?php echo e(route('clientes.index')); ?> class="btn btn-danger btn-ms">Cancelar
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/clients/create.blade.php ENDPATH**/ ?>