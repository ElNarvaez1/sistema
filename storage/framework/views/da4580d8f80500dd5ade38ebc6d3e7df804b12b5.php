<?php $__env->startSection('titulo', 'Bienvenido'); ?>
<?php $__env->startSection('contenido'); ?>
<?php if(auth()->guard()->guest()): ?>

<div id="wrapper">
    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column  bg-color">

        <!-- Main Content -->
        <div id="content">
        <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           

                <!-- Begin Page Content -->
                <div class="container rounded color mt-5 px-5 p-5">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">PAGINA NO ENCONTRADA </p>
                        <p class="message-error404">Parece que encontraste un error <i class="fas fa-frown"></i></p>
                        <a  href="<?php echo e(url('/')); ?>">&larr; ¿Deseas regresar a la pagina principal? <i class="fas fa-smile-beam"></i></a>
                    
                    </div>
                    <br><br><br><br>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <br><br><br><br>
           
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

     <!-- Footer -->
     <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!-- End of Footer -->

<?php else: ?> 



 <!-- Page Wrapper -->
 <div id="wrapper">
    
    <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Begin Page Content -->
                <div class="container rounded color mt-5">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">PAGINA NO ENCONTRADA </p>
                        <p class="message-error404">Parece que encontraste un error <i class="fas fa-frown"></i></p>
                        <a  href="<?php echo e(url('/')); ?>">&larr; ¿Deseas regresar a la pagina principal? <i class="fas fa-smile-beam"></i></a>
                    <br><br>
                    </div>

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
 <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sistema/resources/views/errors/404.blade.php ENDPATH**/ ?>