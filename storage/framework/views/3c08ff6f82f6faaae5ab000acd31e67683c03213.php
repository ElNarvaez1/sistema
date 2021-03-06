
<?php $__env->startSection('titulo', 'Mi perfil'); ?>
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
                    <h1 class="h3 mb-2 bold-title">Devoluciones<i class="fas fa-percentage mx-3"></i></h1>
                    <p class="mb-4 text-dark"></p>

                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">Devoluciónes del producto</h6>
                        </div>
                      
                        

                        <div class="container">
                            <div class="row">                               
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-6 col-lg-10 col-md-8">
                                                <div class="card o-hidden border-login my-5">                                                    
                                                        <div class="container px-5 my-5">
                                                            <div class="row">
                                                                <div class="right-content">
                                                                    <div class="container">                                                                
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-md-12" style="text-align: center">
                                                                                    <label class="text-black"><FONT SIZE =4><b>Asegurese de realizar la devolucion correcta</b></FONT></label>
                                                                                    <br>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="text-center">                                                                                        
                                                                                </div>    
                                                                                <form action=" <?php echo e(route('devolucion.delete')); ?>" method="post">
                                                                                    <?php echo method_field("delete"); ?>
                                                                                    <?php echo csrf_field(); ?>                                                                           
                                                                            <div class="col-md-12 mt-4">
                                                                                    <div class="form-group">
                                                                                    <label class="text-black"><FONT SIZE =3>Fecha en la que se esta realizando la devolución:</FONT></label>
                                                                                        <input disabled="true"id="fecha" type="text" value="<?php echo date("d-m-Y")?>" required> <!--el codigo en php es para obtener la fecha actual-->
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="text-black h5"><FONT SIZE =3>IDVenta:</FONT></label>
                                                                                            <input name="inidVenta" value="<?php echo e($venta->idVenta); ?>" type="text" readonly>
                                                                                        </div>
                                                                                        
                                                                                        <div class="form-group">
                                                                                            <label class="text-black"><FONT SIZE =3>Motivo de la devolución:</FONT></label>
                                                                                            <textarea class="form-control" name="motivo" value="<?php echo e(old('message')); ?>" placeholder="ejemp. Producto en mal estado" required></textarea>
                                                                                        </div>                                                                                       
                                                                                    
                                                                                    <?php $__errorArgs = ['message'];
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
                                                                                <br><br>
                                                                                <div class="text-black h4" style="text-align: center;">
                                                                                
                                                                                
                                                                                    <button title="confirmaDev" class="btn btn-primary btn-ms" type="submit">Confirmar <i class="fas fa-save"></i></button>
                                                                                </form>
                                                             
                                                                                <a class="btn btn-danger btn-ms" href="<?php echo e(route('venta.index')); ?>">  <i class="fas fa-strikethrough"></i>Cancelar</a>
                                                                            </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>

                        <br><br>

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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/devoluciones/confirmar_devolucion.blade.php ENDPATH**/ ?>