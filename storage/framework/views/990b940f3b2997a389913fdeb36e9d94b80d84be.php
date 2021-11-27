
<?php $__env->startSection('titulo', 'Ver Roles'); ?>
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
                    <h1 class="h3 mb-2 bold-title"> MOSTRAR ROL <i class="fas fa-eye mx-3"></i></h1>
                    <p class="mb-4 text-dark">Verifique los datos de sus permisos aquí.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">ID ROL: <?php echo e($role->id); ?></h6>
                        </div>

                        

                        <div class="container">
                    
                                <div class="row justify-content-md-center pt-4">
                                  
                                         
                                    <div class="card text-white bg-dark mb-3 pt-4" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                          <div class="col">
                                            <img class="img-fluid mx-4" 
                                            src="https://image.flaticon.com/icons/png/512/3135/3135715.png"
                                                width="150px"
                                            alt="user">
                                            <br><br>
                                        </div>
                                          <div class="col mx-3">
                                            <div class="card-body">
                                              <h5 class="card-title text-upper text-white"><?php echo e($role->name); ?></h5>
                                              <p class="card-text ">Fecha de creación:</p>
                                              <p class="card-text"><?php echo e($role->created_at); ?></p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                        </div>

                                        
                                        <div class="row justify-content-center mt-4">
                                            <div class="col-auto">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.edit')): ?>
                                                <a href="<?php echo e(route('role.edit',[$role])); ?>" class="btn btn-primary btn-ms">
                                                    ir a editar <i class="fas fa-pen-square"></i> </a>
                                                <?php endif; ?>
                                                </div>
                                            <div class="col-auto">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.index')): ?>
                                                <a href=<?php echo e(route('role.index')); ?> class="btn btn-danger btn-ms">cancelar
                                                    <i class="fas fa-strikethrough"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                        </div>
                                        <br>
                                    
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/roles/show.blade.php ENDPATH**/ ?>