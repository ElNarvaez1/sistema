<!-- Topbar -->
<nav class="navbar navbar-expand bg-color topbar mb-4 static-top">
    <!-- Sidebar Toggle (Topbar) -->
    <div class="container">
        <?php if(auth()->guard()->guest()): ?>
        <a class="navbar-brand text-white" href="<?php echo e(url('/')); ?>">
            <div class="sidebar-brand-icon">
                <img src="https://wallpapercave.com/uwp/uwp1581891.jpeg" alt="Llantero"
                   width="60" height="60" class="d-inline-block align-text-top"> 
           </div>
        </a>
        <?php else: ?>
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        <?php endif; ?>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <?php if(Route::has('login')): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('login')); ?>"><?php echo e(__('Ingresar')); ?></a>
                </li>
                <?php endif; ?>
                <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a>
                </li>
                <?php endif; ?>
            </ul>
            <?php else: ?>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white small me-3"> <?php echo e(Auth::user()->username); ?> </span>
                    <img class="img-profile rounded-circle" src="<?php echo e(Auth::user()->photo); ?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('user.profile')); ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                        Perfil
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                        <?php echo e(__('Cerrar sesión')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
            <?php endif; ?>
        </div>
    </div>
</nav>
<!-- End of Topbar --><?php /**PATH C:\xampp\htdocs\sistema\resources\views/layouts/nav-log.blade.php ENDPATH**/ ?>