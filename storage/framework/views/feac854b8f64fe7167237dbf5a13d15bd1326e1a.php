<?php $__env->startSection('titulo', 'Asignar Rol'); ?>
<?php $__env->startSection('contenido'); ?>


    
    <div id="wrapper">
        
        <?php echo $__env->make('plantilla.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
        <div id="content-wrapper" class="d-flex flex-column">
            
            <div id="content">
                <?php echo $__env->make('layouts.nav-log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
                <div class="container-fluid rounded color">
                    <br>
                    <!--encabezado-->                    
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Cambios de llantas  <i class="fas fa-tools"></i></h1>
                    <p class="mb-4 text-dark">Consulte la información historica sobre le cambio de llantas</p>
                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de cambio de llantas</h6>
                        </div>
                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <a title="agregar nuevo cliente" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"> 
                                                        Nuevo cambio de llanta <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <?php ($arrayB = [
                                                        'idCambioDeLlanta',
                                                        'fecha',
                                                        'descripcion',
                                                        'total',
                                                        'empleado'
                                                        // 'PRECIO COMPRA','PRECIO VENTA'
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
                                            <input class="form-control" name="buscarpor" type="search"  placeholder="Buscar">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <button title="buscar" class="btn btn-outline-primary text-black2" type="submit">Buscar</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">IDCambioLlanta</th>
                                                <th scope="col">fecha</th>
                                                <th scope="col">descripción</th>
                                                <th scope="col">total</th>
                                                <th scope="col">Empleado</th>                                                
                                                <th scope="col" colspan="2">ACCIONES</th>                                                
                                            </tr>
                                            <tbody class="text-black2">
                                                <tr class="table-hover">
                                                    <th class="text-center" scope="row">SERV-123</th>
                                                    <th class="text-center" scope="row">21-12-2021</th>
                                                    <th class="text-center" scope="row">Cambio de una llanata marca michellin</th>
                                                    <th class="text-center" scope="row">$230.0</th>
                                                    <th class="text-center" scope="row">admin</th>
                                                    <th class="text-center" scope="row">
                                                        <a title="Ver mas" class="btn btn-outline-primary btn-circle"> <i class="fa fa-eye"></i></a>
                                                    </th>
                                                </tr>
                                            <tbody>
                                            <!--<h3 class="text-black text-center"> ¡No hay registros!</h3>-->
                                        </thead>
                                    </table>
                                        <nav aria-label="Page navigation example float-right">
                                            <a class="btn btn-outline-primary mx-3 mt-3 " >refrescar</a>
                                            <ul class="pagination float-right mt-3">
                                                <li class="page-item"><a class="page-link">Anterior</a></li>
                                                <li class="page-item"><a class="page-link">1</a></li>                                                
                                                <li class="page-item"><a class="page-link">Siguiente</a></li>
                                            </ul>
                                        </nav>
                                </div>
                            </div>

                        </div>
                    </div>          
                </div>   
                    <?php echo $__env->make('plantilla.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                   
            <div>

        </div>
                

    </div>
            
           
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sistema/resources/views/promociones/index.blade.php ENDPATH**/ ?>