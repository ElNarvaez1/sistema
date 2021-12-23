<?php $__env->startSection('titulo', 'Proveedores'); ?>
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
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Proveedores <i class="fas fa-clipboard-list"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de sus proveedores.</p>
                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de proveedores por tipo</h6>
                        </div>
                        
                        
                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                
                                
                                    <form action="" method="GET">
                                    <div class="row">

                                        
                                        <div class="col-md-3 mt-4">
                                            <div class="form-group">
                                                <a title="agregar nuevo cliente" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"
                                                    href="<?php echo e(route('proveedor.create')); ?>"> 
                                                     Nuevo Proveedor  <i class="fas fa-clipboard-list"></i>
                                                </a>
                                            </div>
                                        </div>

                                        
                                    </form>
                                  
                                </div>
                                
                            </div>
                            <?php if($proveedores->count()): ?>)
                            <div class="card-body ">
                              
                               
                                
                               <div class="table-responsive">
                                    
                                    <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">APELLIDO PATERNO</th>
                                                <th scope="col">APELLIDO MATERNO</th>
                                                <th scope="col">EMPRESA</th>
                                                <th scope="col">DIRECCION</th>
                                                <th scope="col">E-MAIL</th>
                                                <th scope="col">TELEFONO</th>
                                                
                                                <th scope="col" colspan="2">ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            <?php $__empty_1 = true; $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr class="table-hover">
                                                   <th scope="row"><?php echo e($proveedor->idProveedor); ?></th>

                                                    <td>
                                                        

                                                            <?php echo e($proveedor->nombre); ?>

                                                       
                                                    </td>

                                                    
                                                    
                                                    <td class="text-center"><?php echo e($proveedor->apellidoPaterno); ?></td>
                                                    <td class="text-center"> <?php echo e($proveedor->apellidoMaterno); ?></td>
                                                    <td class="text-center"> <?php echo e($proveedor->nombreEmpresa); ?></td>
                                                    <td class="text-center"> <?php echo e($proveedor->direccion); ?></td>
                                                    <td class="text-center"> <?php echo e($proveedor->correo); ?></td>
                                                    <td class="text-center"> <?php echo e($proveedor->telefono); ?></td>
                                                    
                                                    
                                                           

                                                    
                                                    <td>
                                                        
                                                        <a title="editar datos" href="<?php echo e(route('proveedor.edit', $proveedor->idProveedor)); ?>" class="btn btn-outline-primary btn-circle">
                                                            <i class="fa fa-edit"></i></a>
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                        <form action="<?php echo e(route('proveedor.destroy', $proveedor->idProveedor )); ?>" method="POST">
                                                            <?php echo method_field("delete"); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button title="borrar producto" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form> 
                                                        
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <h3 class="text-black text-center"> ¡No hay registros!</h3>
                                     <?php endif; ?>
                                        </tbody>
                                    </table>

                                   
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('proveedor.index')); ?>" class="btn btn-outline-primary" >regresar</a>
                                    </div>
                                </div>
                                
                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        
                                            <strong class ="card-title">¡No hay registros!</strong>
                                       
                                    </div>
                                </div>
                            </div>
                               
                                
                                 </div>
                             <?php endif; ?>
                        
                        </div>
                        <br>
                    </div>
                    <!-- /.container-fluid -->

                    <!-- Footer -->
                    <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sistema/resources/views/proveedor/index.blade.php ENDPATH**/ ?>