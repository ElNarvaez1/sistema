@extends('layouts.main')
@section('titulo', 'Editar Producto')
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
                <br>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 bold-title"> EDITAR PRODUCTO <i class="fas fa-user-edit mx-3"></i> </h1>
                <p class="mb-4 text-dark">Verifique los datos de su producto aquí.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">ID producto: {{ $producto->idProducto }}</h6>
                    </div>

                    {{-- Formulario -> vista de productos --}}

                    <div class="container">

                        <form method="POST" action="{{ route('productos.update', $producto->idProducto) }}" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf

                            idProveedor

                            <div class="row">
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Imagen  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-9 mt-4">
                                    <img class="img-fluid border-image" src="{{$producto->imagen}}" height="200px" width="300px" alt="">
                                </div>
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Nombre  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4 ">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Nombre del producto</label>
                                        <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}" placeholder="Introduce el ombre del producto" class="form-control text-upper" name="nombre">
                                        {{-- validaciones --}}
                                        @error('nombre')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Descripcion  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Descripción</label>
                                        <textarea class="form-control text-upper" name="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>
                                        {{-- validaciones --}}
                                        @error('descripcion')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& TIPO PRODUCTO  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Tipo</label>
                                        {{-- @php($tipos = ['IP', 'SEGURIDAD', 'BULLET', 'DOMO', '8 CANALES', '4 CANALES',
                                                    '16 CANALES', 'P/TRANSMISION DE VIDEO'])

                                                    <select class="form-control" id="tipo" name="tipo">
                                                        @foreach ($tipos as $type))
                                                            <option @if (old('tipo', $producto->tipo) == $type) selected @endif>
                                                                {{ $type }}
                                        </option>
                                        @endforeach
                                        </select> --}}

                                        <input type="text" value="{{ old('tipo', $producto->tipo) }}" placeholder="Modelo" class="form-control text-upper" name="tipo" disabled>
                                        {{-- validaciones --}}
                                        @error('tipo')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& PRECIO COMPRA  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio compra $</label>
                                        <input type="text" name=" precioCompra" value="{{ old(' precioCompra', $producto-> precioCompra) }}" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper" name="precio">
                                        {{-- validaciones --}}
                                        @error(' precioCompra')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& PRECIO VENTA  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio venta $</label>
                                        <input type="text" name="PrecioVenta" value="{{ old('PrecioVenta', $producto->PrecioVenta) }}" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper" name="precio">

                                        {{-- validaciones --}}
                                        @error('PrecioVenta')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Existencia  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-auto">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Existencia</label>
                                        <input type="number" name="existencia" value="{{ old('stock', $producto->existencia) }}" placeholder="En existencia" class="form-control text-upper" min="1" name="existencia">
                                        {{-- validaciones --}}
                                        @error('existencia')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @if($bateria != null)
                            <div class="row">

                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre la bateria</h3>
                                <!--------------------------Inputs de la informacion ALTO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Alto</label>
                                        <input type="number" name="alto" value="{{ $bateria->alto }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion ancho -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Ancho</label>
                                        <input type="number" name="ancho" value="{{ $bateria->ancho }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion LARGO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Largo</label>
                                        <input type="number" name="largo" value="{{ $bateria->largo }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion Amperes -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Amperes</label>
                                        <input type="number" name="amperes" value="{{ $bateria->amperes }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion PERO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Peso</label>
                                        <input type="number" name="peso" value="{{ $bateria->peso }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion MARCA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca</label>
                                        <select name="idMarca" id="selectorMarca" value="{{$bateria->marca}}" class="form-control form-select">
                                            <option value="0">Seleccionar</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion VOLTAJE -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Voltaje</label>
                                        <input type="number" name="voltaje" value="{{ $bateria->voltaje }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                            </div>
                            @else
                            <!-- ################################################################# Seccion de las llantas ############################################################################################ -->
                            <div class="row pt-3">
                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre las llantas</h3>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   SECCION DEL ID DEL RIN   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                @php(
                                $rines = DB::table('rin')->get()
                                )
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Proveedor</label>
                                        <select title="" class="form-control text-upper" name="rin">
                                            <option value="0">Seleccione Rin</option>
                                            @foreach ($rines as $rin)
                                            <option value="{{$rin->idRin}}">{{$rin->numero}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <!----------------------- CAJA DE TEXTO *carga Maxima* ---------------------------------------------->

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Indice de Carga (Carga Maxima)</label>
                                        <input type="number" name="cargaMaxima" id="idcargaMaxima" value="{{old('cargaMaxima')}}" class="form-control text-upper">
                                        @error('cargaMaxima')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!----------------------- CAJA DE TEXTO *velocidad Maxima* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">velocidad Maxima</label>
                                        <input type="number" name="velocidadMaxima" value="{{ old('velocidadMaxima') }}" class="form-control text-upper" min="1">
                                        @error('velocidadMaxima')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!----------------------- CAJA DE Presion ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Presion</label>
                                        <input type="number" name="presion" value="{{ old('presion') }}" class="form-control text-upper" min="1">
                                        @error('presion')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!----------------------- CAJA DE TEXTO *Anvcho* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Ancho</label>
                                        <input type="number" name="anchoLlanta" value="{{ old('anchoLlanta') }}" class="form-control text-upper" min="1">
                                        @error('anchoLlanta')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Diametro</label>
                                        <input type="number" name="diametro" value="{{ old('diametro') }}" class="form-control text-upper" min="1">
                                        @error('diametro')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Fabricante</label>
                                        <input type="text" name="fabricante" value="{{ old('fabricante') }}" class="form-control text-upper" min="1">
                                        @error('fabricante')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Año fabricacnion* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Año fabricante</label>
                                        <input type="text" name="aniofabricante" value="{{ old('aniofabricante') }}" class="form-control text-upper" min="1">
                                        @error('aniofabricante')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Tipo carrp* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Tipo carro</label>
                                        <input type="text" name="tipoCarro" value="{{ old('tipoCarro') }}" class="form-control text-upper" min="1">
                                        @error('tipoCarro')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *marca carrp* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca carro</label>
                                        <input type="text" name="marcaCarro" value="{{ old('marcaCarro') }}" class="form-control text-upper" min="1">
                                        @error('marcaCarro')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            @endif



                            {{-- PARTE BOTONES --}}
                            <div class="row justify-content-center mt-4">
                                <div class="col-auto">
                                    <button title="guardar producto" type="submit" class="btn btn-primary btn-ms">
                                        Guardar <i class="fas fa-save"></i></button>
                                </div>
                                <div class="col-auto">
                                    @can('productos.index')
                                    <a title="cancelar" href={{ route('productos.index') }} class="btn btn-danger btn-ms">cancelar
                                        <i class="fas fa-strikethrough"></i></a>
                                    @endcan
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