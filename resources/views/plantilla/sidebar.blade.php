                <!-- Sidebar -->
                <ul class="navbar-nav bg-color sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
    <div class="sidebar-brand-icon">
         <img src="https://wallpapercave.com/uwp/uwp1581891.jpeg" alt="Llantero"
            width="60" height="60" class="d-inline-block align-text-top"> 
    </div>
    <div class="sidebar-brand-text mx-3">LLantero</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/') }}">
        <i class="fas fa-home"></i>
        <span>Bienvenido</span></a>
</li>

<!-- Divider -->

<!--
 @can('reporte.index')
 <hr class="sidebar-divider my-0">

 <li class="nav-item   {{ !Route::is('reporte.index') ?: 'active' }}">
     <a class="nav-link" href="{{ route('reporte.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span>
     </a>
 </li>
 @endcan
-->
 @can('client.index')
 <hr class="sidebar-divider my-0">

 <li class="nav-item   {{ !Route::is('clientes.index') ?: 'active' }}">
     <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="fas fa-fw fa-user"></i>
         <span>Clientes</span>
     </a>
 </li>
 @endcan

 {{-- @can('client.index') --}}
 <hr class="sidebar-divider my-0">

 <li class="nav-item   {{ !Route::is('venta.index') ?: 'active' }}">
     <a class="nav-link" href="{{ route('venta.index') }}">
        <i class="fas fa-fw fa-cart-arrow-down"></i>
         <span>Ventas</span>
     </a>
 </li>
 {{-- @endcan --}}

  {{-- @can('client.index') --}}
  <hr class="sidebar-divider my-0">

  <li class="nav-item   {{ !Route::is('cambiollantas.index') ?: 'active' }}">
      <a class="nav-link" href="{{ route('cambiollantas.index') }}">
         <i class="fas fa-fw fa-percentage"></i>
          <span>Cambio de neumáticos</span>
      </a>
  </li>
  {{-- @endcan --}}
  


<!--
        @can('productos.index')
        <hr class="sidebar-divider my-0">
            <li class="nav-item  {{ request()->routeIs('productos.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('productos.index') }}">
                    <i class="fas fa-boxes"></i>
                    <span>Productos</span></a>
            </li>
        @endcan
-->

@can('productos.index')
<hr class="sidebar-divider my-0">
    <li class="nav-item  {{ request()->routeIs('productos.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('productos.index') }}">
      <i class="fas fa-car-battery"></i>

            <span>Productos</span></a>
    </li>
@endcan




@can('productos.index')
<hr class="sidebar-divider my-0">
    <li class="nav-item  {{ request()->routeIs('inventario.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('inventario.index') }}">
            <i class="fas fa-boxes"></i>
            <span>Inventario</span></a>
    </li>
@endcan

 @can('cita.create')
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ !Route::is('cita.create') ?: 'active' }}">
        <a class="nav-link" href="{{ route('cita.create') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Agendar citas</span>
        </a>
    </li>
@endcan 
{{--
@can('permission.index')
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ !Route::is('permission.index') ?: 'active' }}">
        <a class="nav-link" href="{{ route('permission.index') }}">
            <i class="fas fa-user-cog"></i>
            <span>Permisos</span>
        </a>
    </li>
@endcan
--}}        
{{--
@can('role.index')
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ !Route::is('role.index') ?: 'active' }}">
        <a class="nav-link" href="{{ route('role.index') }}">
            <i class="fas fa-dice-d20"></i>
            <span>Lista de roles</span>
        </a>
    </li>
@endcan
--}}

@can('user.index')
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ !Route::is('user.index') ?: 'active' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-users fa-fw"></i>
            <span>Usuarios</span>
        </a>
    </li>
@endcan


{{--
 @can('pedido.index') 
<hr class="sidebar-divider my-0">

<li class="nav-item   {{ !Route::is('pedido.index') ?: 'active' }}">
    <a class="nav-link" href="{{ route('pedido.index') }}">
        <i class="fas fa-qrcode"></i>
        <span>Ver pedidos</span>
    </a>
</li>
@endcan
--}}
{{--@can('proveedor.index') --}}
<hr class="sidebar-divider my-0">

<li class="nav-item   {{ !Route::is('proveedor.index') ?: 'active' }}">
    <a class="nav-link" href="{{ route('proveedor.index') }}">
        <i class="fas fa-qrcode"></i>
        <span>Proveedores</span>
    </a>
</li>
{{--@endcan--}}
<hr class="sidebar-divider my-0">

<li class="nav-item   {{ !Route::is('devoluciones.index') ?: 'active' }}">
    <a class="nav-link" href="{{ route('devoluciones.index') }}">
        <i class="fas fa-qrcode"></i>
        <span>Devoluciones</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->
