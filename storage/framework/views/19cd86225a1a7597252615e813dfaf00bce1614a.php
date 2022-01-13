
<?php $__env->startSection('titulo', 'Detalles del cambio de llantas'); ?>
<?php $__env->startSection('contenido'); ?>
<div id="wrapper">    
        
        <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                        <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="container-fluid rounded color">
                                <br>
                                <h1 class="h3 mb-2 bold-title"> Información del cambio de llanta<i class="fas fa-eye mx-3"></i></h1>
                                <p class="mb-4 text-dark">Verifique los datos del servicio aquí.</p>
                                <div class="card shadow mb-4 rounded card-color">
                                        <div class="card-header py-3 bg-color">
                                                <h6 class="m-0 font-weight-bold ">ID Cambio: <?php echo e($cambio->idCambio); ?></h6>
                                        </div>
                                        
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-4 mt-4">
                                                                <label class="text-black h4">Fecha de registro</label>
                                                                <input type="text" disabled="true" name="nombre" value="<?php echo e($cambio->fecha); ?>" placeholder="Nombre del Proveedor" class="form-control text-upper">
                                                        </div>
                                                        <div class="col-md-4 mt-4">
                                                                <label class="text-black h4">Monto</label>
                                                                <input type="text" name="nombre" disabled="true" value="<?php echo e($cambio->monto); ?>" placeholder="Nombre del Proveedor" class="form-control text-upper">
                                                        </div>
                                                        <div class="col-md-4 mt-4">
                                                                <label class="text-black h4">Empleado</label>
                                                                <input type="text" name="nombre" disabled="true" value="<?php echo e($cambio->idUser); ?>" placeholder="Nombre del Proveedor" class="form-control text-upper">
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-6 mt-4">
                                                                <label class="text-black">Descripción sobre el cambio de neumáticos:</label>
                                                                <textarea class="form-control" disabled="true" value="" name="descripcion" placeholder="Descripción" required><?php echo e($cambio->descripcion); ?></textarea>
                                                        </div>
                                                </div>
                                                <hr>
                                                <div class="row justify-content-center mt-4">
                                                <div class="col-auto">
                                                <a title="cancelar producto" href="<?php echo e(route('cambiollantas.index')); ?>" class="btn btn-danger btn-ms">regresar
                                                    <i class="fas fa-strikethrough"></i></a>
                                                 </div>
                                                </div>
                                        </div>
                                </div>

                        </div>
                </div>
        <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/cambiollantas/show.blade.php ENDPATH**/ ?>