
<?php $__env->startSection('titulo', 'Nueva venta'); ?>
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
                    <?php echo csrf_field(); ?>
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 bold-title"> Nueva Venta <i class="fas fa-cart-arrow-down"></i> </h1>
                    <p class="mb-4 text-dark">Registre una nueva venta aquí.</p>
                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">Agregar venta</h6>
                        </div>
                        

                        
                        <div class="container">
                           
                            <form  action="<?php echo e(route('venta.add')); ?>" method="POST">

                                <?php echo csrf_field(); ?>
                                <div class="row">

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Cliente</label>
                                     
                                        <select class="form-control" name="nombre" value="<?php echo e(old('nombre')); ?>">
                                                    <option value="" disabled selected>SELECCIONE UNA OPCIÓN</option>
                                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(old('nombre') == $name): ?>
                                                            <option selected="selected"><?php echo e($name); ?></option>
                                                        <?php else: ?>
                                                            <option><?php echo e($name); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['nombre'];
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

                                </div>




                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$          $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <?php (
                                $productos = DB::table('productos')->get()
                                
                                
                              
                                            
                                ); ?>
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                    <label class="text-black h4">Articulo</label>
                                        <select title="" class="form-control text-upper" name="articulo" id="idP">
                                            <option value="0">Seleccione el articulo</option>
                                            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($Producto->idProducto); ?>"><?php echo e($Producto->nombre); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['articulo'];
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
                                </div>
                                
                                   
                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Cantidad</label>
                                            <input type="number" name="cantidad" value="<?php echo e(old('cantidad')); ?>"
                                               min="1" max="40" placeholder="Cantidad"
                                                class="form-control text-upper" id="ca">
                                            
                                            <?php $__errorArgs = ['cantidad'];
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
                                    </div>
                                   
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4"> Disponibles </label>
                                            <input type="number" name="stock"  value="30"
                                            
                                               min="1" max="40" placeholder="Stock"
                                                class="form-control text-upper" id="s" readonly>
                                            
                                            <?php $__errorArgs = ['stock'];
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
                                    </div>
                                   
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Descuento</label>
                                            <input type="number" name="descuento" value="0"
                                            
                                               min="0" max="40" placeholder="descuento"
                                                class="form-control text-upper">
                                            
                                            <?php $__errorArgs = ['descuento'];
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
                                    </div>
   
                                   
                                    <div class="col-md-4 mt-4">
                                         
                                        <div class="form-group">
                                            <label class="text-black h4">Precio venta</label>
                                            <input type="text" name="pecio_venta" value="<?php echo e(old('pecio_venta')); ?>"
                                               min="1" max="40" placeholder="Precio de venta"
                                                class="form-control text-upper" id="p" readonly >

                                            
                                        
                                            <?php $__errorArgs = ['pecio_venta'];
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
                                    </div>
                                     <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4"> Stock </label>
                                            <input type="number" name="stock"  value="2"
                                            
                                               min="1" max="40" placeholder="Stock"
                                                class="form-control text-upper"  readonly>
                                            
                                            <?php $__errorArgs = ['stock'];
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
                                    </div>
                                        </div>

                                        
                                        
                                        <div class="row justify-content-center mt-4">
                                            <div class="col-md-6">
                                                <button title="guardar datos" type="submit" class="btn btn-primary btn-lg btn-block" id="btn">
                                                    agregar <i class="fas fa-plus-circle"></i></button>
                                            </div>
                                            
                                          
                                       
                                        </div>
                                        <br>

                                    </form>
                                    
                                </div>
                               
                                <?php if(count(Cart::getContent())): ?>  
                                <div class="card-body ">
                                    <div class="table-responsive">
                                        
                                        <table class="table  table-light" width="100%" cellspacing="0">
                                            <thead class="bg-color ">
                                                <tr class="text-blank text-center">
                                                    
                                                    <th scope="col">NO</th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">PRODUCTO</th>
                                                    <th scope="col">PRECIO</th>
                                                    <th scope="col">CANTIDAD</th>
                                                    <th scope="col">DESCUENTO</th>
                                                    <th scope="col">SUBTOTAL</th>
                                                    <th scope="col">TOTAL </th>
                                                    <th scope="col">ACCIÓN</th>
                                                    
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            
                                            
                                            <tbody class="text-black2">
                                               
                                        
                                                    
                                                <?php
                                                {{  $i = 1;}} //contador para el listado de objetos en el carrito
                                                
                                            ?>

                                               <?php $__currentLoopData = Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <tr class="table-hover">
                                                <td class="text-center"><?php echo e($i); ?></td>
                                               
                                                <td class="text-center"><?php echo e($item->id); ?></td>
                                                <td class="text-center"><?php echo e($item->name); ?></td>
                                                <td class="text-center">$ <?php echo e(number_format($item->price, 2, '.', '')); ?> MXN</td>
                                                <td class="text-center"><?php echo e(($item->quantity)); ?></td>
                                                <td class="text-center"><?php echo e($item->attributes->descuento); ?> %</td>
                                                <td class="text-center">$ <?php echo e(number_format(Cart::get($item->id)->getPriceSum(),2, '.', '')); ?> MXN</td>
                                                <?php if($item->attributes->descuento>0): ?>
                                                <td class="text-center"><?php echo e(number_format(Cart::get($item->id)->getPriceSum(),2, '.', '')-(number_format(Cart::get($item->id)->getPriceSum(),2, '.', '')*($item->attributes->descuento/100))); ?> MXN</td>
                                                <?php endif; ?>
                                                <?php if($item->attributes->descuento==0): ?>
                                                <td class="text-center">$<?php echo e(number_format(Cart::get($item->id)->getPriceSum(),2, '.', '')); ?> MXN</td>
                                                <?php endif; ?>
                                               
                                                
                                                <td class="text-center">
                                                    <form action="<?php echo e(route('venta.removeitem')); ?>"
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
                                              
                                               
                                               
                                               <td></td>

                                                
                                   
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                    <tr>
                                        <form action="<?php echo e(route('venta.clear')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <td class="text-center">
                                              <input title="limpiar todo el carrito" 
                                              class="btn btn-outline-danger btn-lg btn-block" type="submit" name="Limpiar" value="limpiar Carrito">
                                      </form>
                                      
                                        <td colspan="5" class="text-right">
                                          <h6>TOTAL</h6>
                                      </td>   
                                        <td  class="text-right">
                                         
                                            <?php echo e(number_format(Cart::getTotal(), 2, '.', '')); ?> MXN
                                           
                                      </td>
                                  
                                  </tr>
                                  <tr>
                              
                                    <td colspan="6" class="text-right">
                                      <h6></h6>                                               </h5>
                                  </td>   
                                    <td  class="text-right">
                                       
                                            
                                        
                                  </td>
                              
                              </tr>
                              <tr>
                              25.1814
                                <td colspan="6" class="text-right">
                                  <h6>TOTAL A PAGAR: </h6>                                               </h5>
                              </td>   
                                <td  class="text-right">
                                   <?php echo e($item->attributes->total_pay); ?>

                                        
                                    
                              </td>
                          
                          </tr>   
                                
                                            </tbody>
                                            
                                        </table>
                                        <?php if(count(Cart::getContent())!=0): ?>
                                       
                                        <form action="<?php echo e(route('venta.payCart')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <button title="realizar compra" class="btn btn-outline-info btn-lg btn-block ">
                                                 Realizar compra <i class="fas fa-cart-arrow-down"></i>
                                            </button>
                                        </form>
                                         <?php endif; ?>
                                       
   
                                    </div>
                            </div>
                        
                            <?php else: ?>
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('venta.index')); ?>" class="btn btn-outline-primary" >regresar</a>
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
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/sales/add.blade.php ENDPATH**/ ?>