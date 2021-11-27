
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold "> <?php echo e(Auth::user()->name); ?></h6>
                        </div>

                        

                        <div class="container">

                            <form method="POST" action="<?php echo e(route('user.editar', $user->id)); ?>"  enctype="multipart/form-data">
                                <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="text-center">
                                        <img class="img-responsive rounded-circle" src="<?php echo e($user->photo); ?>" width="50%" alt="">

                                    </div>
                            </div>

                                <div class="col-md-4 mt-auto ">
                                    <div class="form-group">
                                        <label class="text-black h4">Nombre*</label>
                                        <input type="text"  value="<?php echo e($user->name); ?>"
                                            placeholder="Introduce tu nombre" class="form-control" name="name" required
                                            value="">
                                    </div>
                                 
                                 <?php $__errorArgs = ['name'];
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
                                <div class="col-md-4 mt-auto">
                                    <div class="form-group">
                                        <label class="text-black h4">Nombre de usuario*</label>
                                        <input type="text"  value="<?php echo e($user->username); ?>"
                                            placeholder="Introduce tu correo electrónico" class="form-control"
                                            name="username">
                                    </div>
                                
                                 
                                 <?php $__errorArgs = ['username'];
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

                                <div class="col-md-4 mt-auto">
                                    <div class="form-group">
                                        <label class="text-black h4">Correo electrónico*</label>
                                        <input type="email" value="<?php echo e($user->email); ?>"
                                            placeholder="Introduce tu correo electrónico" class="form-control" name="email">
                                    </div>
                                
                                 
                                 <?php $__errorArgs = ['email'];
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






                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Agregar imagen</label>
                                        
                                        
                                        <small class="text-dark"> <input type="checkbox" class="check-input mx-3" name="check"
                                        <?php if(old('check')=="on"): ?>
                                        checked
                                        <?php endif; ?>
                                        >¿Desea modificar la imagen? active aqui.</small> 
                                            <?php if(old('check')=="on"): ?>
                                              
                                            <input type="file" accept="image/*" name="photo"
                                            placeholder="Inserte una imagen" class="form-control text-upper">
                                             
                                       
                                             <?php $__errorArgs = ['photo'];
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

                            
                            <div class="row justify-content-center">
                                <div class="col-auto mt-4">
                                    <button title="guardar datos de usuario" type="submit" class="btn btn-primary btn-ms">
                                        Guardar <i class="fas fa-save"></i></button>
                                </div>
                                <div class="col-auto mt-4">
                                    <a title="cancelar" href=<?php echo e(route('user.profile')); ?>

                                        class="btn btn-success btn-ms">Regresar
                                        </a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/profile/profile_show.blade.php ENDPATH**/ ?>