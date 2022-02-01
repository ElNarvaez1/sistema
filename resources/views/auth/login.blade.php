@extends('layouts.main')
@section('titulo', 'login')
@section('contenido')
@include('layouts.nav-log')

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <!--Aqui va el borde :v pero no me acuerdo de la clase-->
            <div class="o-hidden my-5 row">
                <div class="container col-5 col-md-6 p-5">
                    <h4 class="h4 mb-4 text-center text-dark">¡Bienvenido!</h4>
                    <form class="user" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="text-dark1 h6">{{ __('Usuario*') }}</label>
                            <input id="username" type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group" id="show_hide_password">
                            <label class="text-dark1 h6">{{ __('Contraseña*') }}</label>
                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input class="custom-control-input" type="checkbox" name="pass" id="mostrar_contrasena">
                                <label class="custom-control-label text-dark" for="mostrar_contrasena">
                                    {{ __('Mostrar contraseña') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label text-dark" for="customCheck">
                                    {{ __('Recuérdame') }}
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block bg-color">
                            {{ __('Ingresar') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
@include('plantilla.footer')
<!-- End of Footer -->
@endsection