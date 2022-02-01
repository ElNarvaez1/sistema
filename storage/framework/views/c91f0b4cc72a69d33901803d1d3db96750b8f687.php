
<?php $__env->startSection('titulo', 'Usuarios'); ?>
<?php $__env->startSection('contenido'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.index')): ?>
                <!-- Begin Page Content -->
                <div class="container-fluid rounded color">
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 bold-title text-upper"> Usuarios  <i class="fas fa-users fa-fw"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de sus usuarios aquí.</p>


                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de usuarios</h6>
                        </div>


                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.index')): ?>
                                <form action="<?php echo e(route('user.index', [$users])); ?>" method="GET"> 
                                                                    
                                    <div class="row">

                                    
                                        <div class="col-md-3 mt-4">
                                            <div class="form-group">
                                                <a title="Agregar nuevo empleado" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"
                                                    href="<?php echo e(route('user.create')); ?>"> 
                                                     Nuevo empleado <i class="fas fa-plus-circle"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 mt-4">
                                            <div class="form-group">
                                                <?php ($arrayB = [
                                                    ['name','NOMBRE'],
                                                    ['username','NOMBRE DE USUARIO'],
                                                    ['email','CORREO ELECTRÓNICO']
                                                    ]); ?>
                                                    <select  title="buscar por" class="form-control" name="type">
                                                        <?php $__currentLoopData = $arrayB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buscar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                       
                                                            <option value=<?php echo e($buscar[0]); ?>><?php echo e($buscar[1]); ?></option>
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
                             <?php if($users->count()): ?>)
                            <div class="card-body ">
                                <div class="table-responsive">
                                    
                                    <table class="table  table-light" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">NOMBRE DE USUARIO</th>
                                                <th scope="col">CORREO ELECTRÓNICO</th>
                                                <th scope="col">TELÉFONO</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">APELLIDO PATERNO</th>
                                                <th scope="col">FECHA DE CREACIÓN</th>
                                                <th scope="col">ACCIÓN</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.index')): ?>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="table-hover"> 
                                                    <td scope="row"><?php echo e($user->id); ?></td>
                                                    <td class="text-center"><?php echo e($user->username); ?></td>
                                                    <td class="text-center"><?php echo e($user->email); ?></td>
                                                    <td class="text-center"><?php echo e($user->telefono); ?></td> 
                                                    <td class="text-center"><?php echo e($user->name); ?></td> 
                                                    <td class="text-center"><?php echo e($user->apellidoPaterno); ?></td> 
                                                    <td class="text-center"><?php echo e($user->created_at); ?></td>                                                
                                                    <td class="text-center">

                                                            
                                                        <a title="editar datos" href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-outline-primary btn-circle">
                                                            <i class="fa fa-edit"></i></a>
                                                        
                                                        
                                                        <?php if(strcmp($user->id, "Admin") !== 0): ?>
                                                        
                                                        <form action="<?php echo e(route('user.destroy', $user->id)); ?>"
                                                            method="post">
                                                            <?php echo method_field("delete"); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <button title="borrar empleado" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form> 
                                                        
                                                        <?php endif; ?>

                                                           
                                                    </td>
                                                
                                                </tr>
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                        </tbody>
                                    </table>
                                    
                                    
                                    <nav aria-label="Page navigation example float-right">
                                        <a href="<?php echo e(route('user.index')); ?>" class="btn btn-outline-primary mx-3 mt-3 " >Refrescar</a>
                                        <ul class="pagination float-right mt-3">
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($users->previousPageUrl()); ?>">Anterior</a></li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($users->url(1)); ?>">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($users->url(2)); ?>">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="<?php echo e($users->url(3)); ?>">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="<?php echo e($users->nextPageUrl()); ?>">Siguiente</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            <?php else: ?>
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('user.index')); ?>" class="btn btn-outline-primary" >regresar</a>
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
                    <?php endif; ?>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/usuarios/index.blade.php ENDPATH**/ ?>