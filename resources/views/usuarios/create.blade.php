@extends('layouts.main')
@section('titulo', 'Agregar empleado')
@section('contenido')

    <!-- Page Wrapper -->
    <div id="wrapper">
        {{-- incluimos sildebar color: azul :) --}}
        @include('plantilla.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('layouts.nav-log')

                <!-- Begin Page Content -->
                <div class="container-fluid rounded color">
                    @csrf
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 bold-title"> REGISTRAR EMPLEADO <i class="fas fa-plus-circle mx-3"></i> </h1>
                    <p class="mb-4 text-dark">Registre un nuevo empleado aquí.</p>


                    {{-- mensajes --}}
                    @include('plantilla.notification')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">Agregar empleado</h6>
                        </div>

                        {{-- Formulario -> vista de productos --}}

                        
                        <div class="container">
                           
                            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">

                                @csrf
                                <div class="row">


                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre del empleado</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                placeholder="Nombre del empleado"
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('name')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Apellido Paterno</label>
                                            <input type="text" name="apellidoPaterno" value="{{ old('apellidoPaterno') }}"
                                                placeholder="Apellido paterno"
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('apellidoPaterno')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Apellido Materno</label>
                                            <input type="text" name="apellidoMaterno" value="{{ old('apellidoMaterno') }}"
                                                placeholder="Apellido materno"
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('apellidoMaterno')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                   

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">E-mail</label>
                                                    <input type="text" name="email" value="{{ old('email') }}"
                                                        placeholder="CORREO ELECTRONICO"
                                                        class="form-control">

                                                    {{-- validaciones --}}
                                                    @error('correo')
                                                        <div class="message-error">*{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Telefono</label>
                                                    <input type="text" name="telefono" value="{{ old('telefono') }}"
                                                        placeholder="telefono "
                                                        class="form-control text-upper">

                                                    {{-- validaciones --}}
                                                    @error('telefono')
                                                        <div class="message-error">*{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Lista de roles</label>
                                                    
                                                        
                                                        @foreach( $roles as $role)
                                                        <div class="text-black h4">
                                                            <label >
                                                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                                                {{$role->name}}
                                                            </label>
                                                        </div>
                                                           
                                                        @endforeach
                                                    
                                                    {{-- validaciones --}}
                                                    @error('idRol')
                                                    <div class="message-error">*{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre de usuario</label>
                                            <input type="text" name="username" value="{{ old('username') }}"
                                                placeholder="Nombre del usuario"
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('username')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Contraseña</label>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                placeholder="contraseña"
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('password')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Confirmar contraseña</label>
                                            <input type="password" name="conf_password" value="{{ old('conf_password') }}"
                                                placeholder="contraseña"
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('conf_password')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                            
                                        </div>

                                        {{-- PARTE BOTONES --}}
                                        
                                        <div class="row justify-content-center mt-4">
                                            <div class="col-auto">
                                                <button title="guardar datos" type="submit" class="btn btn-primary btn-ms">
                                                    Guardar <i class="fas fa-save"></i></button>
                                            </div>
                                            
                                            <div class="col-auto">
                                                <a title="cancelar producto" href={{ route('user.index') }} class="btn btn-danger btn-ms">cancelar
                                                    <i class="fas fa-strikethrough"></i></a>
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
                    @include('plantilla.footer')
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

        @endsection
