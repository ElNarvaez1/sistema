        <!-- Sidebar -->
        <ul class="navbar-nav bg-color sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(url('/')); ?>">
                <div class="sidebar-brand-icon">
                     <img src="https://wallpapercave.com/uwp/uwp1581891.jpeg" alt="Llantero"
                        width="60" height="60" class="d-inline-block align-text-top"> 
                </div>
                <div class="sidebar-brand-text mx-3">LLantero</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">
                    <i class="fas fa-home"></i>
                    <span>Bienvenido</span></a>
            </li>

            <!-- Divider -->
<!--
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reporte.index')): ?>
             <hr class="sidebar-divider my-0">

             <li class="nav-item   <?php echo e(!Route::is('reporte.index') ?: 'active'); ?>">
                 <a class="nav-link" href="<?php echo e(route('reporte.index')); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Dashboard</span>
                 </a>
             </li>
             <?php endif; ?>
    -->
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client.index')): ?>
             <hr class="sidebar-divider my-0">

             <li class="nav-item   <?php echo e(!Route::is('clientes.index') ?: 'active'); ?>">
                 <a class="nav-link" href="<?php echo e(route('clientes.index')); ?>">
                    <i class="fas fa-fw fa-user"></i>
                     <span>Clientes</span>
                 </a>
             </li>
             <?php endif; ?>

             
             <hr class="sidebar-divider my-0">

             <li class="nav-item   <?php echo e(!Route::is('venta.index') ?: 'active'); ?>">
                 <a class="nav-link" href="<?php echo e(route('venta.index')); ?>">
                    <i class="fas fa-fw fa-cart-arrow-down"></i>
                     <span>Ventas</span>
                 </a>
             </li>
             

              
              <hr class="sidebar-divider my-0">

              <li class="nav-item   <?php echo e(!Route::is('promocion.index') ?: 'active'); ?>">
                  <a class="nav-link" href="<?php echo e(route('promocion.index')); ?>">
                     <i class="fas fa-fw fa-percentage"></i>
                      <span>Cambio de neumaticos</span>
                  </a>
              </li>
              




            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
            <hr class="sidebar-divider my-0">
                <li class="nav-item  <?php echo e(request()->routeIs('productos.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('productos.index')); ?>">
                        <i class="fas fa-boxes"></i>
                        <span>Productos</span></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('productos.index')): ?>
            <hr class="sidebar-divider my-0">
                <li class="nav-item  <?php echo e(request()->routeIs('inventario.index') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('inventario.index')); ?>">
                        <i class="fas fa-boxes"></i>
                        <span>Inventario</span></a>
                </li>
            <?php endif; ?>

             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cart.cart')): ?>
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?php echo e(!Route::is('cart.cart') ?: 'active'); ?>">
                    <a class="nav-link" href="<?php echo e(url('/Cart/Carrito')); ?>">
                        <i class="fas fa-store"></i>
                        <span>Catálogo</span></a>
                </li>
            <?php endif; ?>

            

             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cita.create')): ?>
                <hr class="sidebar-divider my-0">
                <li class="nav-item <?php echo e(!Route::is('cita.create') ?: 'active'); ?>">
                    <a class="nav-link" href="<?php echo e(route('cita.create')); ?>">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Agendar citas</span>
                    </a>
                </li>
            <?php endif; ?> 
        

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.index')): ?>
                <hr class="sidebar-divider my-0">

                <li class="nav-item <?php echo e(!Route::is('role.index') ?: 'active'); ?>">
                    <a class="nav-link" href="<?php echo e(route('role.index')); ?>">
                        <i class="fas fa-dice-d20"></i>
                        <span>Lista de roles</span>
                    </a>
                </li>
            <?php endif; ?>
            

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.index')): ?>
                <hr class="sidebar-divider my-0">

                <li class="nav-item <?php echo e(!Route::is('user.index') ?: 'active'); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                        <i class="fas fa-users fa-fw"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
            <?php endif; ?>
            

             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pedido.index')): ?> 
            <hr class="sidebar-divider my-0">

            <li class="nav-item   <?php echo e(!Route::is('pedido.index') ?: 'active'); ?>">
                <a class="nav-link" href="<?php echo e(route('pedido.index')); ?>">
                    <i class="fas fa-qrcode"></i>
                    <span>Ver pedidos</span>
                </a>
            </li>
            <?php endif; ?>


             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cart.invoices')): ?>
            <hr class="sidebar-divider my-0">

            <li class="nav-item   <?php echo e(!Route::is('cart.invoices') ?: 'active'); ?>">
                <a class="nav-link" href="<?php echo e(route('cart.invoices')); ?>">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Nota de pago</span>
                </a>
            </li>
            <?php endif; ?>

            


            



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
<?php /**PATH C:\xampp\htdocs\sistema\resources\views/plantilla/sidebar.blade.php ENDPATH**/ ?>