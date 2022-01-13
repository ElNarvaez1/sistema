
<?php $__env->startSection('titulo', 'Agregar Producto'); ?>
<?php $__env->startSection('contenido'); ?>

<<<<<<< HEAD
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
                    <h1 class="h3 mb-2 bold-title"> REGISTRAR PRODUCTO <i class="fas fa-plus-circle mx-3"></i> </h1>
                    <p class="mb-4 text-dark">Registre su producto aquí.</p>


                    
                    <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">Agregar producto</h6>
                        </div>

                        

                        
                        <div class="container">
                           
                            <form method="POST" action="<?php echo e(route('productos.store')); ?>" enctype="multipart/form-data">

                                <?php echo csrf_field(); ?>
                                <div class="row">

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre del producto</label>
                                            <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>"
                                                placeholder="Introduce el nombre del producto"
                                                class="form-control text-upper">
                                            
                                            <?php $__errorArgs = ['nombre'];
=======
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
                <h1 class="h3 mb-2 bold-title"> REGISTRAR PRODUCTO <i class="fas fa-plus-circle mx-3"></i> </h1>
                <p class="mb-4 text-dark">Registre su producto aquí.</p>


                
                <?php echo $__env->make('plantilla.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">Agregar producto</h6>
                    </div>

                    


                    <div class="container">

                        <form method="POST" action="<?php echo e(route('productos.store')); ?>" enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <!--
                                idProducto
idProveedor



                                -->
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  NOMBRE     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Nombre del producto</label>
                                        <input type="text" name="nombre" value="<?php echo e(old('nombre')); ?>" placeholder="Introduce el nombre del producto" class="form-control text-upper">
                                        
                                        <?php $__errorArgs = ['nombre'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<<<<<<< HEAD
                                                <div class="message-error">*<?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                    </div>

                                    <div class="col-md-8 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Descripción</label>
                                            <textarea class="form-control text-upper"
                                                placeholder="Descripción del producto..."
                                                name="descripcion"><?php echo e(old('descripcion')); ?></textarea>

                                            
                                            <?php $__errorArgs = ['descripcion'];
=======
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>


                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  DESCRIPCION     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->


                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Descripción</label>
                                        <textarea class="form-control text-upper" placeholder="Descripción del producto..." name="descripcion"><?php echo e(old('descripcion')); ?></textarea>

                                        
                                        <?php $__errorArgs = ['descripcion'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<<<<<<< HEAD
                                                <div class="message-error">*<?php echo e($message); ?></div>
                                            <?php unset($message);
=======
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
>>>>>>> Narvaez
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<<<<<<< HEAD
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Modelo</label>
                                            

                                                
                                                
                                                <input type="text" name="modelo" value="<?php echo e(old('modelo')); ?>"
                                                placeholder="Introduce el modelo del producto"
                                                class="form-control text-upper">
                                                <?php $__errorArgs = ['modelo'];
=======
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Modelo     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Modelo</label>
                                        <input type="text" name="modelo" value="<?php echo e(old('modelo')); ?>" placeholder="Introduce el modelo del producto" class="form-control text-upper">
                                        <?php $__errorArgs = ['modelo'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<<<<<<< HEAD
                                                    <div class="message-error">*<?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mt-4">
                                            <div class="form-group">
                                                <label class="text-black h4">Tipo</label>
                                                

                                                    <input type="text" name="tipo" value="<?php echo e(old('tipo')); ?>"
                                                placeholder="Introduce el tipo del producto"
                                                class="form-control text-upper">

                                                    
                                                    <?php $__errorArgs = ['tipo'];
=======
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Imagen     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Agregar imagen</label>
                                        <!-- Upload image input-->
                                        <input type="file" name="imagen" accept="image/*" placeholder="Inserte una imagen" class="form-control text-upper">
                                        
                                        <?php $__errorArgs = ['imagen'];
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
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Precio compra     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio compra $</label>
                                        <input type="text" name="precio_c" value="<?php echo e(old('precio_c')); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper">

                                        
                                        <?php $__errorArgs = ['precio_c'];
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
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Precio venta     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio venta $</label>
                                        <input type="text" name="precio_v" value="<?php echo e(old('precio_v')); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper">
                                        
                                        <?php $__errorArgs = ['precio_v'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<<<<<<< HEAD
                                                        <div class="message-error">*<?php echo e($message); ?></div>
                                                    <?php unset($message);
=======
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
>>>>>>> Narvaez
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<<<<<<< HEAD
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Precio compra $</label>
                                                    <input type="text" name="precio_c" value="<?php echo e(old('precio_c')); ?>"
                                                        placeholder="Introduce precio del producto 0.0 $"
                                                        class="form-control text-upper">

                                                    
                                                    <?php $__errorArgs = ['precio_c'];
=======
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Existencia     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->


                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Existencia</label>
                                        <input type="number" name="stock" value="<?php echo e(old('stock')); ?>" placeholder="En existencia" class="form-control text-upper" min="1">
                                        
                                        <?php $__errorArgs = ['stock'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<<<<<<< HEAD
                                                        <div class="message-error">*<?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Precio venta $</label>
                                                    <input type="text" name="precio_v" value="<?php echo e(old('precio_v')); ?>"
                                                        placeholder="Introduce precio del producto 0.0 $"
                                                        class="form-control text-upper">

                                                    
                                                    <?php $__errorArgs = ['precio_v'];
=======
                                        <div class="message-error">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Proveedor     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <?php (
                                $proveedores = DB::table('proveedores')->get()
                                ); ?>
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Proveedor</label>
                                        <select title="" class="form-control text-upper" name="proveedor">
                                            <option value="0">Seleccione el proveedor</option>
                                            <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($proveedor->idProveedor); ?>"><?php echo e($proveedor->nombre); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   Seecion de sub formulario   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <h2 class="col-12 text-dark h5 my-3">Informacion individual</h2>
                                <input type="hidden" name="checkProducto" id="checkValue" value="llantas">
                                <div class="container-fluid">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item col-md-6" role="presentation">
                                            <label  id="tipo-llantas" class="nav-link text-dark w-100 active" data-name="llantas" data-bs-toggle="tab" data-bs-target="#llantas-seccion" type="button" role="tab" aria-controls="home" aria-selected="true">Llantas</label>
                                        </li>
                                        <li class="nav-item col-md-6" role="presentation">
                                            <label  id="tipo-baterias" class="nav-link text-dark w-100" data-name="baterias" data-bs-toggle="tab" data-bs-target="#baterias-seccion" type="button" role="tab" aria-controls="profile" aria-selected="false">Baterias</label>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="llantas-seccion" role="tabpanel" aria-labelledby="tipo-llantas">
                                            <div class="row pt-3">
                                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre las llantas</h3>
                                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   SECCION DEL ID DEL RIN   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                                <?php (
                                                $rines = DB::table('rin')->get()
                                                ); ?>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Proveedor</label>
                                                        <select title="" class="form-control text-upper" name="rin">
                                                            <option value="0">Seleccione Rin</option>
                                                            <?php $__currentLoopData = $rines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($rin->idRin); ?>"><?php echo e($rin->numero); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>


                                                <!----------------------- CAJA DE TEXTO *carga Maxima* ---------------------------------------------->

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Indice de Carga (Carga Maxima)</label>
                                                        <input type="number" name="cargaMaxima" id="idcargaMaxima" value="<?php echo e(old('cargaMaxima')); ?>" class="form-control text-upper">
                                                        <?php $__errorArgs = ['cargaMaxima'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="message-error">*<?php echo e($message); ?></div>
<<<<<<< HEAD
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                                </div>
                                            </div>


                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Existencia</label>
                                                    <input type="number" name="stock" value="<?php echo e(old('stock')); ?>"
                                                        placeholder="En existencia" class="form-control text-upper" min="1">

                                                    
                                                    <?php $__errorArgs = ['stock'];
=======
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <!----------------------- CAJA DE TEXTO *velocidad Maxima* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">velocidad Maxima</label>
                                                        <input type="number" name="velocidadMaxima" value="<?php echo e(old('velocidadMaxima')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['velocidadMaxima'];
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

                                                <!----------------------- CAJA DE Presion ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Presion</label>
                                                        <input type="number" name="presion" value="<?php echo e(old('presion')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['presion'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="message-error">*<?php echo e($message); ?></div>
<<<<<<< HEAD
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Agregar imagen</label>
                                                    
                                                      <!-- Upload image input-->
                                                      
                                                        <input type="file"  name="imagen"  accept="image/*"
                                                        placeholder="Inserte una imagen" class="form-control text-upper">
                                                

                                                    
                                                    <?php $__errorArgs = ['imagen'];
=======
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <!----------------------- CAJA DE TEXTO *Anvcho* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Ancho</label>
                                                        <input type="number" name="anchoLlanta" value="<?php echo e(old('anchoLlanta')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['anchoLlanta'];
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
                                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Diametro</label>
                                                        <input type="number" name="diametro" value="<?php echo e(old('diametro')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['diametro'];
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
                                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Fabricante</label>
                                                        <input type="text" name="fabricante" value="<?php echo e(old('fabricante')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['fabricante'];
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
                                                <!----------------------- CAJA DE TEXTO *Año fabricacnion* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Año fabricante</label>
                                                        <input type="text" name="aniofabricante" value="<?php echo e(old('aniofabricante')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['aniofabricante'];
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
                                                <!----------------------- CAJA DE TEXTO *Tipo carrp* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Tipo carro</label>
                                                        <input type="text" name="tipoCarro" value="<?php echo e(old('tipoCarro')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['tipoCarro'];
>>>>>>> Narvaez
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="message-error">*<?php echo e($message); ?></div>
<<<<<<< HEAD
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            
                                        </div>

                                        
                                        
                                        <div class="row justify-content-center mt-4">
                                            <div class="col-auto">
                                                <button title="guardar producto" type="submit" class="btn btn-primary btn-ms">
                                                    Guardar <i class="fas fa-save"></i></button>
                                            </div>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
                                            <div class="col-auto">
                                                <a title="cancelar producto" href=<?php echo e(route('productos.index')); ?> class="btn btn-danger btn-ms">cancelar
                                                    <i class="fas fa-strikethrough"></i></a>
                                            </div>
                                        <?php endif; ?>
                                        </div>
                                        <br>

                                    </form>
                                    
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

=======
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <!----------------------- CAJA DE TEXTO *marca carrp* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Marca carro</label>
                                                        <input type="text" name="marcaCarro" value="<?php echo e(old('marcaCarro')); ?>" class="form-control text-upper" min="1">
                                                        <?php $__errorArgs = ['marcaCarro'];
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

                                        </div>
                                        <div class="tab-pane fade" id="baterias-seccion" role="tabpanel" aria-labelledby="tipo-baterias">
                                            <div class="row">
                                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre baterias</h3>
                                                 <!--------------------------Inputs de la informacion ALTO -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Alto</label>
                                                        <input type="number" name="alto" value="<?php echo e(old('alto')); ?>" placeholder="" class="form-control text-upper" min="1">
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion ancho -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Ancho</label>
                                                        <input type="number" name="ancho" value="<?php echo e(old('ancho')); ?>" placeholder="" class="form-control text-upper" min="1">
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion LARGO -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Largo</label>
                                                        <input type="number" name="largo" value="<?php echo e(old('largo')); ?>" placeholder="" class="form-control text-upper" min="1">
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion Amperes -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Amperes</label>
                                                        <input type="number" name="amperes" value="<?php echo e(old('amperes')); ?>" placeholder="" class="form-control text-upper" min="1">
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion PERO -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Peso</label>
                                                        <input type="number" name="peso" value="<?php echo e(old('peso')); ?>" placeholder="" class="form-control text-upper" min="1">
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion MARCA -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Marca</label>
                                                        <select name="idMarca" id="selectorMarca" class="form-control form-select">
                                                            <option value="0">Seleccionar</option>
                                                            <option value="1">Marca 1</option>
                                                            <option value="2">Marca 2</option>
                                                            <option value="3">Marca 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion VOLTAJE -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Voltaje</label>
                                                        <input type="number" name="voltaje" value="<?php echo e(old('stock')); ?>" placeholder="" class="form-control text-upper" min="1">
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            

                            <div class="row justify-content-center mt-4">
                                <div class="col-auto">
                                    <button title="guardar producto" type="submit" class="btn btn-success btn-ms">
                                        Guardar <i class="fas fa-save"></i></button>
                                </div>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
                                <div class="col-auto">
                                    <a title="cancelar producto" href=<?php echo e(route('productos.index')); ?> class="btn btn-primary btn-ms">Regresar
                                        <i class="fas fa-strikethrough"></i></a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <br>

                        </form>

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
<script>
    const putValue= (e) =>{
        let inputHiden = document.getElementById('checkValue');
        inputHiden.value = e.target.dataset.name;
    }
    let botonLlantas = document.getElementById('tipo-llantas'); 
    let botonBateria = document.getElementById('tipo-baterias'); 
    botonLlantas.addEventListener('click',putValue);
    botonBateria.addEventListener('click',putValue);
</script>
<!-- End of Page Wrapper -->

<?php $__env->stopSection(); ?>
>>>>>>> Narvaez
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/productos_add.blade.php ENDPATH**/ ?>