
<?php $__env->startSection('titulo', 'Roles'); ?>
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
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Roles <i class="fas fa-dice-d20"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de roles aquí.</p>


                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de roles por tipo y agregar roles</h6>
                        </div>


                        <div class="card shadow  rounded card-color">
                            <div class="container">
                               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.index')): ?>
                                <form action="<?php echo e(route('role.index', [$roles])); ?>" method="GET"> 
                                                                    
                                    <div class="row">

                                        
                                        <div class="col-md-3 mt-4">
                                            <div class="form-group">
                                                <a title="agregar rol" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"
                                                    href="<?php echo e(route('role.create')); ?>">
                                                    Agregar rol <i class="fas fa-plus-circle"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 mt-4">
                                            <div class="form-group">
                                                <?php ($arrayB = [
                                                    'NOMBRE',
                                                    'FECHA'
                                                    ]); ?>
                                                    <select title="buscar por" class="form-control" name="type">
                                                        <?php $__currentLoopData = $arrayB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buscar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                       
                                                            <option><?php echo e($buscar); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <input class="form-control" name="buscarpor" type="search"
                                                        placeholder="Buscar">

                                                </div>
                                            </div>


                                            <div class="col-md-3 mt-4">
                                                <div class="form-group">
                                                    <button title="buscar" class="btn btn-outline-primary text-black2"
                                                        type="submit">Buscar</button>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                    <?php endif; ?>
                                </div>
                                
                            </div>

                            <?php if($roles->count()): ?>)
                            <div class="card-body ">
                                <div class="table-responsive">
                                    
                                    <table class="table  table-light" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">ID</th>  
                                                <th scope="col">ROLE</th>
                                                <th scope="col">FECHA</th>
                                                <th colspan="2" scope="col">ACCIONES</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr class="table-hover">
                                                    
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.show')): ?>
                                                    <td class="text-center"><?php echo e($rol->id); ?></td>
                                                    <td class="text-center">
                                                        <a class="text-center"
                                                            href="<?php echo e(route('role.show', [$rol])); ?>">

                                                            <?php echo e($rol->name); ?></td>
                                                        </a>
                                                    </td>
                                                    <td class="text-center"><?php echo e($rol->created_at); ?></td>
                                                    
                                                    <td class="text-center"  width="10px">
                                                        <a title="editar rol" href="<?php echo e(route('role.edit', [$rol])); ?>"
                                                            class="btn btn-outline-primary btn-circle">
                                                            <i class="fa fa-edit"></i></a>

                                                    </td>
                                                    <td class="text-center" width="10px">
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.destroy')): ?>
                                                        <form action="<?php echo e(route('role.destroy', [$rol])); ?>" method="POST"> 
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("delete"); ?>
                                                           
                                                            <button title="borrar rol" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                               <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    
                                    <nav aria-label="Page navigation example float-right">
                                        <a href="<?php echo e(route('role.index')); ?>" class="btn btn-outline-primary mx-3 mt-3" >refrescar</a>
                                        <ul class="pagination float-right mt-3">
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($roles->previousPageUrl()); ?>">Anterior</a></li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($roles->url(1)); ?>">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($roles->url(2)); ?>">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($roles->url(3)); ?>">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($roles->nextPageUrl()); ?>">Siguiente</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('role.index')); ?>" class="btn btn-outline-primary" >regresar</a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/roles/index.blade.php ENDPATH**/ ?>