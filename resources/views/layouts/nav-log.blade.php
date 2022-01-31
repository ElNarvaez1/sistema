<!-- Topbar -->
<nav class="navbar navbar-expand bg-color topbar mb-4 static-top">
    <!-- Sidebar Toggle (Topbar) -->
    <div class="container">
        @guest
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            <div class="sidebar-brand-icon">
                <img src="https://wallpapercave.com/uwp/uwp1581891.jpeg" alt="Llantero"
                   width="60" height="60" class="d-inline-block align-text-top"> 
           </div>
        </a>
        @else
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        @endguest
        {{--
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                </li>
                @endif
            </ul>
            @else

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white medio me-3"> {{ Auth::user()->username }} </span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('user.profile') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                        Perfil
                    </a>
                    {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                        {{ __('Cerrar sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </div>
    </div>
</nav>
<!-- End of Topbar -->