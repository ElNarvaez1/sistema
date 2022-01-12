
<?php $__env->startSection('titulo', 'Catalogo'); ?>
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
                    <h1 class="h3 mb-2 bold-title text-upper"> Catálogo <i class="fas fa-store"></i></h1>
                    <p class="mb-4 text-dark">Consulte sus productos aquí.</p>


                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('cart.cart', [$productos])); ?>" method="GET">
                        <?php echo csrf_field(); ?> 
                    </form>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="font-weight-bold ">

                                <?php if(count(Cart::getContent())): ?>
                                <a class="nav-link text-light" 
                                href="<?php echo e(route('cart.checkout')); ?>" ><h4>Ver carrito <i class="fas fa-cart-plus"></i>  : 
                                    <span class="badge badge-success"> <?php echo e(count(Cart::getContent())); ?></span> </h4></a>        
                                <?php else: ?>
                                <a class="nav-link text-light" 
                                href="<?php echo e(route('cart.checkout')); ?>" ><h4>Ver carrito <i class="fas fa-cart-plus"></i>  : 
                                    <span class="badge badge-danger"> <?php echo e(count(Cart::getContent())); ?></span> </h4></a>        
                                <?php endif; ?>
                            </h6>
                        </div>

                        <?php

                        $session = session('_token');
                        $sessiontostring =  strval($session);
                        //echo "$sessiontostring";
                        
                             ?>
                        <div class="card shadow  rounded card-color">
                            
                            </div>
                            <div class="card-body ">
                              
                              
                                <div class="row">
                                    <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md mt-4 mx-2">
                                        <div class="card bg-light text-dark mb-3 rounded" 
                                        style="width: 17rem;">
                                            <img src="<?php echo e($producto->imagen); ?>" 
                                            class="img-responsive card-img rounded"
                                             width="200px" height="295px"
                                             alt="camaras de seguridad">
                                            <div class="card-body">
                                           
                                                
                                                <h2 class="card-title text-center  "><?php echo e($producto->nombre); ?></h2>
                                              <hr class="sidebar-divider bg-primary">
                                              <h4 class="text-center price">$ <?php echo e($producto->precio_v); ?>.00 MXN</h4>
                                              <hr class="sidebar-divider bg-primary">
                                              
                                              <?php if($producto->stock >0): ?>
                                              <form  action="<?php echo e(route('cart.add')); ?>" method="POST">
                                              <p class="card-text  text-center stock">Existencia: <?php echo e($producto->stock); ?></p>
                                              <hr class="sidebar-divider bg-primary">
                                              <p class="card-text  text-justify description"><?php echo e($producto->descripcion); ?></p>
                                              
                                              <input type="number" value="<?php echo e(old($producto->stock-$producto->stock+1)); ?>" max="<?php echo e($producto->stock); ?>" min="1" 
                                                placeholder="Cantidad" class="form-control text-upper text-center"
                                                id="cuantity" name="cantidad">
                                                <hr class="sidebar-divider">


                                                    
                                                   
                                                        <?php echo csrf_field(); ?>
                                                      <input type="hidden" name="producto_id" 
                                                      value="<?php echo e($producto->id); ?>">
                                                      
                                                        <button  title="agregar al carrito" class="btn btn-outline-primary btn-lg btn-block"> Agregar <i class="fas fa-cart-plus"></i> 
                                                        </button>   
                                                     </form>
                                                    <?php else: ?>
                                                    <p class="card-text  text-center stock-danger">Existencia: <?php echo e($producto->stock); ?></p>
                                                    <hr class="sidebar-divider bg-primary">
                                                    <p class="card-text  text-justify description"><?php echo e($producto->descripcion); ?></p>
                                                    <button   class="btn btn-danger btn-lg btn-block" disabled> Agotado <i class="fas fa-frown"></i> 
                                                    </button>
                                                    
                                                     <?php endif; ?>

                                             
                                              
                                             
                                             
                                            </div>
                                          </div>
                                        </div> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        
                                        

                                    <?php endif; ?>
                                </div>
                               
                                
                            
                                <nav aria-label="Page navigation example float-right">
                                    <ul class="pagination float-right">
                                        <li class="page-item"><a class="page-link"
                                                href="<?php echo e($productos->previousPageUrl()); ?>">Anterior</a></li>
                                        <li class="page-item"><a class="page-link" href="<?php echo e($productos->url(1)); ?>">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?php echo e($productos->url(2)); ?>">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="<?php echo e($productos->url(3)); ?>">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                href="<?php echo e($productos->nextPageUrl()); ?>">Siguiente</a></li>
                                    </ul>
                                </nav>
                            
                            
                            
                       
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/Cart/Carrito.blade.php ENDPATH**/ ?>