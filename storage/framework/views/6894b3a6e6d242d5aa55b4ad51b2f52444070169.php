
<?php $__env->startSection('titulo', 'Catálogo'); ?>
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <?php if(count(Cart::getContent())): ?>
                            <a  class="nav-link text-light"
                             href="<?php echo e(route('cart.cart')); ?>" ><h4>Ir a catálogo <i class="fas fa-cart-plus"></i>  : 
                                <span class="badge badge-success"> <?php echo e(count(Cart::getContent())); ?></span> </h4></a>           
                       <?php else: ?>
                            <a class="nav-link text-light"
                            href="<?php echo e(route('cart.cart')); ?>" ><h4>Ver carrito <i class="fas fa-cart-plus"></i>  : 
                                <span class="badge badge-danger"> <?php echo e(count(Cart::getContent())); ?></span> </h4></a>           
                       <?php endif; ?>
                            </div>
                            <?php

                            $session = session('_token');
                            $sessiontostring =  strval($session);
                            //echo "$sessiontostring";
                            
                                 ?>

                        <div class="card shadow  rounded card-color">
                            
                        </div>
                        <?php if(count(Cart::getContent())): ?>
                           

                                <div class="card-body ">
                                    <div class="table-responsive">
                                        
                                        <table class="table  table-light" width="100%" cellspacing="0">
                                            <thead class="bg-color ">
                                                <tr class="text-blank text-center">
                                                    
                                                    <th scope="col">NO</th>
                                                    <th scope="col">PRODUCTO</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">NOMBRE</td>
                                                    <th scope="col">PRECIO</th>
                                                    <th scope="col">CANTIDAD</th>
                                                    <th scope="col">ACCIÓN</th>
                                                    
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            
                                            
                                            <tbody class="text-black2">
                                               
                                        
                                                    
                                                <?php
                                                {{  $i = 1;}} //contador para el listado de objetos en el carrito
                                            ?>

                                               <?php $__currentLoopData = Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <?php

                                               $cadenafoto = $item->attributes;
                                         $elimina = array("\"", "{","[","]", "}","imagen:",'/');
                                         
                                               $urlfoto = str_replace($elimina,"" ,$cadenafoto)
                                         
                                               //Esto que ven aqui es para poder sacar la foto de los atributos del carrito y me estorbaban esos caracteres
                                               ?>

                                                
                                               <tr class="table-hover">
                                                <td class="text-center"><?php echo e($i); ?></td>
                                                <td>
                                                    <div class="text-center">
                                                    <img src="<?php echo e($urlfoto); ?>" class="image-responsive img-thumbnail rounded"  
                                                    width="20%" alt="camaras de seguridad">
                                                    </div>
                                                </td>
                                                <td class="text-center"><?php echo e($item->id); ?></td>
                                                <td class="text-center"><?php echo e($item->name); ?></td>
                                                <td class="text-center"><?php echo e($item->price); ?></td>
                                                <td class="text-center"><?php echo e($item->quantity); ?></td>

                                                <td class="text-center">
                                                    <form action="<?php echo e(route('cart.removeitem')); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?> 
                                                    <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                                                    <button title="eliminar producto" type="submit" class="btn btn-outline-danger btn-circle">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                                </td>
                                                   
                                                   }
                                            </tr>

                                            <?php

                                                $i++;
                                                ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                               <td>
                                                <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                                                      <?php echo csrf_field(); ?>
                                                      <td class="text-center">
                                                        <input title="limpiar todo el carrito" class="btn btn-outline-danger btn-lg btn-block" type="submit" name="Limpiar" value="Limpiar Carrito">
                                                </form>
                                               </td>
                                               <td></td>
                                               <td class="text-right"> TOTAL: <?php echo e(Cart::getTotal()); ?>  MXN</td>
                                                <td class="text-right">SUBTOTAL:  <?php echo e(Cart::getSubTotal()*.9); ?> MXN</td>
                                               
                                               

                                               
                            
                                               
                                            </tbody>
                                            
                                        </table>
                                        <?php if(count(Cart::getContent())!=0): ?>
                                       

                                            <a title="realizar compra" href="<?php echo e(route('cart.stripe')); ?>"class="btn btn-outline-success btn-lg btn-block ">
                                                 comprar <i class="fas fa-cart-arrow-down"></i>
                                            </a>
                                        <?php endif; ?>
   
                                    </div>
                            </div>
                        
                            <?php else: ?>
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('cart.cart')); ?>" class="btn btn-outline-primary" >regresar</a>
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


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/Cart/checkout.blade.php ENDPATH**/ ?>