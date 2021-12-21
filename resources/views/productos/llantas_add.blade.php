@extends('layouts.main')
@section('titulo', 'Agregar Producto')
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
                <h1 class="h3 mb-2 bold-title"> REGISTRAR LLANTA <i class="fas fa-plus-circle mx-3"></i> </h1>
                <p class="mb-4 text-dark">Registre su mueva llanta.</p>


                {{-- mensajes --}}
                @include('plantilla.notification')

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">Agregar llantas</h6>
                    </div>

                    {{-- Formulario -> vista de llantas --}}


                    <div class="container">

                        <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="row">

<!--############################################# INPUTS ############################################################################################################-->
id Rin                                                    
'carga Maxima',
                                                    'velocidad Maxima',
                                                    'medida',
                                                    'presion'
                                <!-----------------------INPUTS DE ID ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Id de la llanta</label>
                                        <input type="text" name="idLlanta" value="{{ old('idLlanta') }}" placeholder="Introduce el nombre del producto" class="form-control text-upper">
                                        {{-- validaciones --}}
                                        @error('idLlanta')
                                            <div class="message-error">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO ---------------------------------------------->
                                
                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Descripción</label>
                                        <textarea class="form-control text-upper" placeholder="Descripción del producto..." name="descripcion">{{ old('descripcion') }}</textarea>
                                        @error('descripcion')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <!----------------------- CAJA DE TEXTO ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Existencia</label>
                                        <input type="number" name="stock" value="{{ old('stock') }}" placeholder="En existencia" class="form-control text-upper" min="1">

                                        {{-- validaciones --}}
                                        @error('stock')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="text-black h4">Agregar imagen</label>

                                        <!-- Upload image input-->

                                        <input type="file" name="imagen" accept="image/*" placeholder="Inserte una imagen" class="form-control text-upper">


                                        {{-- validaciones --}}
                                        @error('imagen')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                            </div>

                            {{-- PARTE BOTONES --}}

                            <div class="row justify-content-center mt-4">
                                <div class="col-auto">
                                    <button title="guardar producto" type="submit" class="btn btn-success btn-ms">
                                        Guardar <i class="fas fa-save"></i></button>
                                </div>
                                @can('productos.index')
                                <div class="col-auto">
                                    <a title="cancelar producto" href={{ route('productos.index') }} class="btn btn-primary btn-ms">Regresar
                                        <i class="fas fa-strikethrough"></i></a>
                                </div>
                                @endcan
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