
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
                    <h1 class="h3 mb-2 bold-title"> Mi Perfil de usuario<i class="fas fa-user mx-3"></i></h1>
                    <p class="mb-4 text-dark"></p>

                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold "> <?php echo e(Auth::user()->name); ?></h6>
                        </div>

                      
                        

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="text-center">
                                        <img class="img-responsive rounded-circle" src="<?php echo e($user->photo); ?>" width="50%" alt="">

                                    </div>
                            </div>

                                <div class="col-md-4 mt-auto ">
                                    <div class="form-group">
                                        <label class="text-black h4">Nombre</label>
                                        <input type="text" disabled="true" value="<?php echo e($user->name); ?>"
                                            placeholder="Introduce tu nombre" class="form-control" name="name" required
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4 mt-auto">
                                    <div class="form-group">
                                        <label class="text-black h4">Nombre de usuario</label>
                                        <input type="text" disabled="true" value="<?php echo e($user->username); ?>"
                                            placeholder="Introduce tu correo electrónico" class="form-control"
                                            name="username">
                                    </div>
                                </div>

                                <div class="col-md-4 mt-auto">
                                    <div class="form-group">
                                        <label class="text-black h4">Correo electrónico</label>
                                        <input type="email" disabled="true" value="<?php echo e($user->email); ?>"
                                            placeholder="Introduce tu correo electrónico" class="form-control" name="email">
                                    </div>
                                </div>




                            </div>

                            
                            <div class="row justify-content-center">
                                <div class="col-auto mt-4">
                                    
                                        <a title="Edita tus datos" 
                                        href="<?php echo e(route('user.show',$user->id)); ?>"
                                            class="btn btn-primary">
                                            Editar  <i class="fas fa-pen-square"></i> </a>
                                    
                                </div>
                                <div class="col-auto mt-4">
                                    <a title="cancelar" href=<?php echo e(url('/')); ?>

                                        class="btn btn-danger ">cancelar
                                        <i class="fas fa-strikethrough"></i></a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/profile/index.blade.php ENDPATH**/ ?>