
<?php $__env->startSection('titulo', 'login'); ?>
<?php $__env->startSection('contenido'); ?>
<?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <!--Aqui va el borde :v pero no me acuerdo de la clase-->
            <div class="o-hidden my-5 row">
                <div class="container col-5 col-md-6 p-5">
                    <h4 class="h4 mb-4 text-center text-dark">¡Bienvenido!</h4>
                    <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="text-dark1 h6"><?php echo e(__('Usuario*')); ?></label>
                            <input id="username" type="text" class="form-control  <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" value="<?php echo e(old('username')); ?>" autocomplete="username" autofocus>

                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group" id="show_hide_password">
                            <label class="text-dark1 h6"><?php echo e(__('Contraseña*')); ?></label>
                            <input id="password" type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" autocomplete="current-password">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input class="custom-control-input" type="checkbox" name="pass" id="mostrar_contrasena">
                                <label class="custom-control-label text-dark" for="mostrar_contrasena">
                                    <?php echo e(__('Mostrar contraseña')); ?>

                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="custom-control-label text-dark" for="customCheck">
                                    <?php echo e(__('Recuérdame')); ?>

                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block bg-color">
                            <?php echo e(__('Ingresar')); ?>

                        </button>
                    </form>
                    <div class="text-center">
                        <?php if(Route::has('password.request')): ?>
                        <a class="small" href="<?php echo e(route('password.request')); ?>">
                            ¿Has olvidado tu contraseña?
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="text-center">
                        <a class="small" href="<?php echo e(route('register')); ?>">¡Crea una cuenta!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End of Footer -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/auth/login.blade.php ENDPATH**/ ?>