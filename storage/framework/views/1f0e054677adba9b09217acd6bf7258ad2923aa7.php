
<?php $__env->startSection('titulo', 'Editar Producto'); ?>
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
                <h1 class="h3 mb-2 bold-title"> EDITAR PRODUCTO <i class="fas fa-user-edit mx-3"></i> </h1>
                <p class="mb-4 text-dark">Verifique los datos de su producto aquí.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">ID producto: <?php echo e($producto->idProducto); ?></h6>
                    </div>

                    

                    <div class="container">

                        <form method="POST" action="<?php echo e(route('productos.update', $producto->idProducto)); ?>" enctype="multipart/form-data">
                            <?php echo method_field("PUT"); ?>
                            <?php echo csrf_field(); ?>

                            <input type="hidden" value="<?php echo e($producto->tipo); ?>" name="tipoProductoClasificacion">

                            <div class="row">
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Nombre  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4 ">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Nombre del producto*</label>
                                        <input type="text" name="nombre" value="<?php echo e(old('nombre', $producto->nombre)); ?>" placeholder="Introduce el ombre del producto" class="form-control text-upper" name="nombre">
                                        
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
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Descripcion  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Descripción*</label>
                                        <textarea class="form-control text-upper" name="descripcion"><?php echo e(old('descripcion', $producto->descripcion)); ?></textarea>
                                        
                                        <?php $__errorArgs = ['descripcion'];
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

                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& TIPO PRODUCTO  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Tipo*</label>
                                        

                                        <input type="text" value="<?php echo e(old('tipo', $producto->tipo)); ?>" placeholder="Modelo" class="form-control text-upper" name="tipo" disabled>
                                        
                                        <?php $__errorArgs = ['tipo'];
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
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& PRECIO COMPRA  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio compra* ($)</label>
                                        <input type="text" name=" precioCompra" value="<?php echo e(old(' precioCompra', $producto-> precioCompra)); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper" name="precio">
                                        
                                        <?php $__errorArgs = ['precioCompra'];
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
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& PRECIO VENTA  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio venta* ($)</label>
                                        <input type="text" name="PrecioVenta" value="<?php echo e(old('PrecioVenta', $producto->PrecioVenta)); ?>" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper" name="precio">

                                        
                                        <?php $__errorArgs = ['PrecioVenta'];
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
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Existencia  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-auto">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Existencia*</label>
                                        <input type="number" name="existencia" value="<?php echo e(old('stock', $producto->existencia)); ?>" placeholder="En existencia" class="form-control text-upper" min="1" name="existencia">
                                        
                                        <?php $__errorArgs = ['existencia'];
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
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Proveedor     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <?php ($proveedores = DB::table('proveedores')->get() ); ?>
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Proveedor*</label>
                                        <select title="" class="form-control text-upper" name="proveedor">
                                            <option value="0">Seleccione el proveedor</option>
                                            <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($proveedor->idProveedor); ?>"><?php echo e($proveedor->nombre); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?php if($bateria != null): ?>
                            <div class="row">

                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre la batería</h3>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Modelo     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Modelo*</label>
                                        <input type="text" name="modelo" value="<?php echo e($bateria->modelo); ?>" placeholder="Introduce el modelo del producto" class="form-control text-upper">
                                        <?php $__errorArgs = ['modelo'];
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
                                <!--------------------------Inputs de la informacion ALTO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Alto*</label>
                                        <input type="number" name="alto" value="<?php echo e($bateria->alto); ?>" placeholder="" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['alto'];
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
                                <!--------------------------Inputs de la informacion ancho -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Ancho*</label>
                                        <input type="number" name="ancho" value="<?php echo e($bateria->ancho); ?>" placeholder="" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['ancho'];
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
                                <!--------------------------Inputs de la informacion LARGO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Largo*</label>
                                        <input type="number" name="largo" value="<?php echo e($bateria->largo); ?>" placeholder="" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['largo'];
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
                                <!--------------------------Inputs de la informacion Amperes -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Amperes*</label>
                                        <input type="number" name="amperes" value="<?php echo e($bateria->amperes); ?>" placeholder="" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['amperes'];
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
                                <!--------------------------Inputs de la informacion PERO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Peso*</label>
                                        <input type="number" name="peso" value="<?php echo e($bateria->peso); ?>" placeholder="" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['peso'];
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
                                <!--------------------------Inputs de la informacion MARCA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca*</label>
                                        <select name="idMarca" id="selectorMarca" value="<?php echo e($bateria->marca); ?>" class="form-control form-select">
                                            <option value="0">Seleccionar</option>
                                                <option value="1">Gonher</option>
                                                <option value="2">LTH</option>
                                                <option value="3">Duralast</option>
                                                <option value="4">América racing</option>
                                                <option value="5">Energizer</option>
                                                <option value="6">Voltar ultra</option>
                                                <option value="7">XS power</option>
                                        </select>
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion VOLTAJE -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Voltaje*</label>
                                        <input type="number" name="voltaje" value="<?php echo e($bateria->voltaje); ?>" placeholder="" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['voltaje'];
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
                            <?php elseif($llanta != null): ?>
                            <!-- ################################################################# Seccion de las llantas ############################################################################################ -->
                            <div class="row pt-3">
                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre las llantas</h3>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   SECCION DEL ID DEL RIN   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <?php (
                                $rines = DB::table('rin')->get()
                                ); ?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Rines*</label>
                                        <select title="" class="form-control text-upper" name="rin" value="<?php echo e($llanta->idRin); ?>">
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
                                        <label class="fs-5 text-body">Índice de Carga* (Carga Máxima)</label>
                                        <input type="number" name="cargaMaxima" id="idcargaMaxima" value="<?php echo e($llanta->indiceCarga); ?>" class="form-control text-upper">
                                        <?php $__errorArgs = ['cargaMaxima'];
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

                                <!----------------------- CAJA DE TEXTO *velocidad Maxima* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Velocidad Máxima*</label>
                                        <input type="number" name="velocidadMaxima" value="<?php echo e($llanta->velocidadMaxima); ?>" class="form-control text-upper" min="1">
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
                                        <label class="fs-5 text-body">Presion*</label>
                                        <input type="number" name="presion" value="<?php echo e($llanta->presion); ?>" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['presion'];
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

                                <!----------------------- CAJA DE TEXTO *Anvcho* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Ancho*</label>
                                        <input type="number" name="anchoLlanta" value="<?php echo e($llanta->ancho); ?>" class="form-control text-upper" min="1">
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
                                        <label class="fs-5 text-body">Diámetro*</label>
                                        <input type="number" name="diametro" value="<?php echo e($llanta->diametro); ?>" class="form-control text-upper" min="1">
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
                                        <label class="fs-5 text-body">Fabricante*</label>
                                        <input type="text" name="fabricante" value="<?php echo e($llanta->Fabricante); ?>" class="form-control text-upper" min="1">
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
                                        <label class="fs-5 text-body">Año fabricante*</label>
                                        <input type="text" name="aniofabricante" value="<?php echo e($llanta->anioFabricacion); ?>" class="form-control text-upper" min="1">
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
                                        <label class="fs-5 text-body">Tipo carro*</label>
                                        <input type="text" name="tipoCarro" value="<?php echo e($llanta->tipoDeCarro); ?>" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['tipoCarro'];
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
                                <!----------------------- CAJA DE TEXTO *marca carrp* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca carro*</label>
                                        <input type="text" name="marcaCarro" value="<?php echo e($llanta->marcasDeCarro); ?>" class="form-control text-upper" min="1">
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
                            <?php else: ?>
                            <!-- Infomracion de los rines --->
                            <div class="row pt-3">
                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre los rines</h3>
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Numero de rin</label>
                                        <input type="number" name="numeroRin" value="<?php echo e($rin->numero); ?>" placeholder="" class="form-control text-upper" min="1">
                                        <?php $__errorArgs = ['numeroRin'];
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
                                <?php endif; ?>



                                
                                <div class="row justify-content-center mt-4">
                                    <div class="col-auto">
                                        <button title="guardar producto" type="submit" class="btn btn-primary btn-ms">
                                            Guardar <i class="fas fa-save"></i></button>
                                    </div>
                                    <div class="col-auto">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
                                        <a title="cancelar" href=<?php echo e(route('productos.index')); ?> class="btn btn-danger btn-ms">cancelar
                                            <i class="fas fa-strikethrough"></i></a>
                                        <?php endif; ?>
                                    </div>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/productos/productos_edit.blade.php ENDPATH**/ ?>