
<?php $__env->startSection('titulo', 'Agregar Llantas'); ?>
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
                <h1 class="h3 mb-2 bold-title"> PRODUCTOS - LLANTAS <i class="fas fa-boxes"></i></h1>
                <p class="mb-4 text-dark">Registro de llantas nuevas.</p>


                
                <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold">Agrega, edite y elimine llantas.</h6>
                    </div>


                    <div class="card shadow  rounded card-color">
                        <div class="container">

                            <form action="<?php echo e(route('llantas.index')); ?>" method="GET">
                                <div class="row">

                                    
                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <a title="agregar llanta" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2" href="<?php echo e(route('llantas.create')); ?>">
                                                <i class="fas fa-plus-circle"></i>
                                                Agregar llanta
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <?php ($arrayB = [
                                            'id Llanta',
                                            'id Rin',
                                            'carga Maxima',
                                            'velocidad Maxima',
                                            'medida',
                                            'presion'
                                            ]); ?>
                                            <select title="buscar por" class="form-control text-upper" name="type">
                                                <?php $__currentLoopData = $arrayB; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buscar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option><?php echo e($buscar); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <input class="form-control" name="buscarpor" type="search" placeholder="Buscar">
                                        </div>
                                    </div>


                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <button title="buscar" class="btn btn-outline-primary text-black2" type="submit">Buscar</button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>
                        
                    </div>
                    <?php if($productos->count()): ?>)
                    <div class="card-body ">


                        <div class="table-responsive">
                            
                            <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                <thead class="bg-color ">
                                    <tr class="text-blank text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">DESCRIPCIÓN</th>
                                        <th scope="col">MODELO</th>
                                        <th scope="col">TIPO</th>
                                        <th scope="col">PRECIO COMPRA</th>
                                        <th scope="col">PRECIO VENTA</th>
                                        <th scope="col">EXISTENCIA</th>
                                        <th scope="col" colspan="2">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody class="text-black2">
                                    <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <!-- <tr class="table-hover">
                                        <th scope="row"><?php echo e($producto->idLlanta); ?></th>

                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('llantas.show')): ?>
                                            <a class="text-center" href="<?php echo e(route('llantas.show', [$producto])); ?>">

                                                <?php echo e($producto->idLlanta); ?>

                                            </a>
                                            <?php endif; ?>
                                        </td>

                                        <td class="text-justify"><?php echo e($producto->descripcion); ?></td>
                                        <td class="text-center"><?php echo e($producto->modelo); ?></td>
                                        <td class="text-center"><?php echo e($producto->tipo); ?></td>
                                        <td class="text-center">$ <?php echo e($producto->precio_c); ?></td>
                                        <td class="text-center">$ <?php echo e($producto->precio_v); ?></td>
                                        <?php if($producto->stock>5): ?>
                                        <h5>
                                            <td class="badge badge-success"><?php echo e($producto->stock); ?></td>
                                        </h5>
                                        <?php elseif($producto->stock == 0): ?>
                                        <h5>
                                            <td class="badge badge-danger"><?php echo e($producto->stock); ?></td>
                                        </h5>
                                        <?php else: ?>
                                        <h5>
                                            <td class="badge badge-warning"><?php echo e($producto->stock); ?></td>
                                        </h5>
                                        <?php endif; ?>


                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('llantas.edit')): ?>
                                            <a title="editar producto" href="<?php echo e(route('llantas.edit', [$producto])); ?>" class="btn btn-outline-primary btn-circle">
                                                <i class="fa fa-edit"></i></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('llantas.destroy')): ?>
                                            <form action="<?php echo e(route('llantas.destroy', [$producto])); ?>" method="post">
                                                <?php echo method_field("delete"); ?>
                                                <?php echo csrf_field(); ?>
                                                <button title="borrar producto" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr> -->
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
                                    <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-outline-primary">regresar</a>
                                </div>
                            </div>

                            <div class="col-md-8 mt-4">
                                <div class="form-group">

                                    <strong class="card-title">¡No hay registros!</strong>

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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/llantas_index.blade.php ENDPATH**/ ?>