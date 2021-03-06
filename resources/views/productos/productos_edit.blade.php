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

                            <input type="hidden" value="{{$producto->tipo}}" name="tipoProductoClasificacion">

                            <div class="row">
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& Nombre  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4 ">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Nombre del producto*</label>
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
                                        <label class="fs-5 text-body">Descripción*</label>
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
                                        <label class="fs-5 text-body">Tipo*</label>
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
                                        <label class="fs-5 text-body">Precio compra* ($)</label>
                                        <input type="text" name=" precioCompra" value="{{ old(' precioCompra', $producto-> precioCompra) }}" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper" name="precio">
                                        {{-- validaciones --}}
                                        @error('precioCompra')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& PRECIO VENTA  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio venta* ($)</label>
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
                                        <label class="fs-5 text-body">Existencia*</label>
                                        <input type="number" name="existencia" value="{{ old('stock', $producto->existencia) }}" placeholder="En existencia" class="form-control text-upper" min="1" name="existencia">
                                        {{-- validaciones --}}
                                        @error('existencia')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Proveedor     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                @php($proveedores = DB::table('proveedores')->get() )
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Proveedor*</label>
                                        <select title="" class="form-control text-upper" name="proveedor">
                                            <option value="0">Seleccione el proveedor</option>
                                            @foreach ($proveedores as $proveedor)
                                            <option value="{{$proveedor->idProveedor}}">{{$proveedor->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @if($bateria != null)
                            <div class="row">

                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre la batería</h3>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Modelo     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Modelo*</label>
                                        <input type="text" name="modelo" value="{{ $bateria->modelo }}" placeholder="Introduce el modelo del producto" class="form-control text-upper">
                                        @error('modelo')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion ALTO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Alto*</label>
                                        <input type="number" name="alto" value="{{ $bateria->alto }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('alto')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion ancho -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Ancho*</label>
                                        <input type="number" name="ancho" value="{{ $bateria->ancho }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('ancho')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion LARGO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Largo*</label>
                                        <input type="number" name="largo" value="{{ $bateria->largo }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('largo')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion Amperes -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Amperes*</label>
                                        <input type="number" name="amperes" value="{{ $bateria->amperes }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('amperes')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion PERO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Peso*</label>
                                        <input type="number" name="peso" value="{{ $bateria->peso }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('peso')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion MARCA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca*</label>
                                        <select name="idMarca" id="selectorMarca" value="{{$bateria->marca}}" class="form-control form-select">
                                            <option value="0">Seleccionar</option>
                                                <option value="1">Gonher</option>
                                                <option value="2">LTH</option>
                                                <option value="3">Duralast</option>
                                                <option value="4">América racing</option>
                                                <option value="5">Energizer</option>
                                                <option value="6">Voltar ultra</option>
                                                <option value="7">XS power</option>
                                        </select>
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion VOLTAJE -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Voltaje*</label>
                                        <input type="number" name="voltaje" value="{{ $bateria->voltaje }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('voltaje')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @elseif($llanta != null)
                            <!-- ################################################################# Seccion de las llantas ############################################################################################ -->
                            <div class="row pt-3">
                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre las llantas</h3>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   SECCION DEL ID DEL RIN   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                @php(
                                $rines = DB::table('rin')->get()
                                )
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Rines*</label>
                                        <select title="" class="form-control text-upper" name="rin" value="{{$llanta->idRin}}">
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
                                        <label class="fs-5 text-body">Índice de Carga* (Carga Máxima)</label>
                                        <input type="number" name="cargaMaxima" id="idcargaMaxima" value="{{$llanta->indiceCarga}}" class="form-control text-upper">
                                        @error('cargaMaxima')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!----------------------- CAJA DE TEXTO *velocidad Maxima* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Velocidad Máxima*</label>
                                        <input type="number" name="velocidadMaxima" value="{{ $llanta->velocidadMaxima }}" class="form-control text-upper" min="1">
                                        @error('velocidadMaxima')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!----------------------- CAJA DE Presion ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Presion*</label>
                                        <input type="number" name="presion" value="{{ $llanta->presion }}" class="form-control text-upper" min="1">
                                        @error('presion')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!----------------------- CAJA DE TEXTO *Anvcho* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Ancho*</label>
                                        <input type="number" name="anchoLlanta" value="{{ $llanta->ancho }}" class="form-control text-upper" min="1">
                                        @error('anchoLlanta')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Diámetro*</label>
                                        <input type="number" name="diametro" value="{{ $llanta->diametro }}" class="form-control text-upper" min="1">
                                        @error('diametro')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Fabricante*</label>
                                        <input type="text" name="fabricante" value="{{ $llanta->Fabricante }}" class="form-control text-upper" min="1">
                                        @error('fabricante')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Año fabricacnion* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Año fabricante*</label>
                                        <input type="text" name="aniofabricante" value="{{ $llanta->anioFabricacion }}" class="form-control text-upper" min="1">
                                        @error('aniofabricante')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *Tipo carrp* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Tipo carro*</label>
                                        <input type="text" name="tipoCarro" value="{{ $llanta->tipoDeCarro }}" class="form-control text-upper" min="1">
                                        @error('tipoCarro')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!----------------------- CAJA DE TEXTO *marca carrp* ---------------------------------------------->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca carro*</label>
                                        <input type="text" name="marcaCarro" value="{{ $llanta->marcasDeCarro }}" class="form-control text-upper" min="1">
                                        @error('marcaCarro')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            @else
                            <!-- Infomracion de los rines --->
                            <div class="row pt-3">
                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre los rines</h3>
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Numero de rin</label>
                                        <input type="number" name="numeroRin" value="{{ $rin->numero }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('numeroRin')
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