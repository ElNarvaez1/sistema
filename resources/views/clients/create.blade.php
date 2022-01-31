@extends('layouts.main')
@section('titulo', 'Agregar cliente')
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
                    <h1 class="h3 mb-2 bold-title"> REGISTRAR CLIENTE <i class="fas fa-plus-circle mx-3"></i> </h1>
                    <p class="mb-4 text-dark">Registre un nuevo cliente aquí.</p>


                    {{-- mensajes --}}
                    @include('plantilla.notification')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">Agregar cliente</h6>
                        </div>

                        {{-- Formulario -> vista de productos --}}

                        
                        <div class="container">
                           
                            <form method="POST" action="{{ route('clientes.store') }}" enctype="multipart/form-data">

                                @csrf
                                <div class="row">



                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Nombre del cliente*</label>
                                            <input type="text" name="nombre" value="{{ old('nombre') }}"
                                                placeholder="Nombre del cliente"
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('nombre')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Apellido Paterno*</label>
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
                                            <label class="text-black h4">Apellido Materno*</label>
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
                                                    <label class="text-black h4">Telefono*</label>
                                                    <input type="text" name="telefono" value="{{ old('telefono') }}"
                                                        placeholder="telefono "
                                                        class="form-control text-upper">

                                                    {{-- validaciones --}}
                                                    @error('telefono')
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
                                                <a title="cancelar producto" href={{ route('clientes.index') }} class="btn btn-danger btn-ms">cancelar
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
