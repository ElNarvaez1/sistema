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

                        <form method="POST" action="{{ route('llantas.update',$llanta->idLlanta) }}" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <div class="row">

                                <!--############################################# INPUTS ############################################################################################################-->
                                                                    <!--------------------------Inputs de la informacion NOMBRE-------------------------->
                                                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Nombre</label>
                                            <input type="text" name="nombre" value="{{ $llanta->nombre }}"
                                                placeholder="" class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('nombre')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--------------------------Inputs de la informacion MODELO-------------------------->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Modelo</label>
                                            <input type="text" name="modelo" value="{{ $llanta->modelo }}"
                                                placeholder="" class="form-control text-upper">
                                                @error('modelo')
                                                    <div class="message-error">*{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <!--------------------------Inputs de la informacion IMAGEN-------------------------->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Imagen</label>
                                            <input type="file" name="imageFile" value="{{$llanta->imageFile}}" class="form-control text-upper">
                                                @error('tipo')
                                                    <div class="message-error">*{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <!--------------------------Inputs de la informacion PRECIO COMPRA -------------------------->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Precio compra $</label>
                                            <input type="number" name="precio_c" value="{{ $llanta->precio_c }}"
                                                        placeholder="" class="form-control text-upper">
                                                @error('precio_c')
                                                    <div class="message-error">*{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <!--------------------------Inputs de la informacion PRECIO VENTA -------------------------->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Precio venta</label>
                                            <input type="number" name="precio_v" value="{{ $llanta->precio_v  }}"
                                                        placeholder="$" class="form-control text-upper">
                                                @error('precio_v')
                                                    <div class="message-error">*{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <!--------------------------Inputs de la informacion EXISTENCIA -------------------------->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label class="fs-5 text-body">Existencia</label>
                                            <input type="number" name="existencia" value="{{ $llanta->existencia  }}"
                                                        placeholder="" class="form-control text-upper" min="1">
                                                @error('stock')
                                                    <div class="message-error">*{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                <!-----------------------INPUTS DE ID *Id de la llanta*---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Id de la llanta</label>
                                        <input type="text" name="idLlanta" value="{{ $llanta->idLlanta }}" disabled placeholder="Introduce el nombre del producto" class="form-control text-upper">
                                        {{-- validaciones --}}
                                        @error('idLlanta')
                                        <div class="message-error">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *carga Maxima* ---------------------------------------------->

                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Carga Maxima</label>
                                        <input type="number" name="cargaMaxima" id="idcargaMaxima" value="{{$llanta->cargaMaxima}}" class="form-control text-upper">
                                        @error('cargaMaxima')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!----------------------- CAJA DE TEXTO *velocidad Maxima* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">velocidad Maxima</label>
                                        <input type="number" name="stock" value="{{ $llanta->stock }}" class="form-control text-upper" min="1">
                                        @error('velocidadMaxima')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Media* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Medida</label>
                                        <input type="number" name="medida" value="{{ $llanta->medida }}" class="form-control text-upper" min="1">
                                        @error('medida')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Presion</label>
                                        <input type="number" name="presion" value="{{  $llanta->presion }}" class="form-control text-upper" min="1">
                                        @error('presion')
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
                                    <a title="cancelar producto" href="../" class="btn btn-primary btn-ms">Regresar
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