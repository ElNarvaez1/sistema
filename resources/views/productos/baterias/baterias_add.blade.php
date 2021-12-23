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
                <h1 class="h3 mb-2 bold-title"> REGISTRAR BATERÍA <i class="fas fa-plus-circle mx-3"></i> </h1>
                <p class="mb-4 text-dark">Registre su batería aquí.</p>

                {{-- mensajes --}}
                @include('plantilla.notification')

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">Agregar bateria</h6>
                    </div>

                    {{-- Formulario -> vista de productos --}}


                    <div class="container">

                        <form method="POST" action="{{ route('bateria.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!--
                                    Productos
                                        -> idProveedor  
                                        -> nombre       *
                                        -> descripcion  *
                                        -> imagen       * 
                                        -> precioCompra *
                                        -> PrecioVenta  *
                                        -> existencia   *
                                    Bateria
                                        -> idMarca      *
                                        -> tamanio      *
                                        -> modelo       *
                                        -> voltaje
                                    -->
                                <!--------------------------Inputs de la informacion NOMBRE-------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Nombre</label>
                                        <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="" class="form-control text-upper">
                                        {{-- validaciones --}}
                                        @error('nombre')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion PROVEEDOR -------------------------->
                                <!--
                                    PHP tempral ajajajaj no sabia donde ponerlo
                                -->
                                @php(
                                    $proveedores = App\Models\Proveedor::all()
                                )
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">ID Proveedor</label>
                                        <select name="proveedor" value="{{ old('proveedor') }}" id="" class="form-control text-upper">
                                            <option value="0">Seleccione un proveedor</option>
                                            @foreach( $proveedores as $proveedor)
                                                <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                            @endforeach
                                        </select>
                                        {{-- validaciones --}}
                                        @error('proveedor')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>    

                                <!--------------------------Inputs de la informacion MODELO-------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Modelo</label>
                                        <input type="text" name="modelo" value="{{ old('modelo') }}" placeholder="" class="form-control text-upper">
                                        @error('modelo')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion IMAGEN-------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Imagen</label>
                                        <input type="file" name="imageFile" value="" class="form-control text-upper">
                                        @error('tipo')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion PRECIO COMPRA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio compra $</label>
                                        <input type="number" name="precio_c" value="{{ old('precio_c') }}" placeholder="" class="form-control text-upper">
                                        @error('precio_c')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion PRECIO VENTA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio venta</label>
                                        <input type="number" name="precio_v" value="{{ old('precio_v') }}" placeholder="$" class="form-control text-upper">
                                        @error('precio_v')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion EXISTENCIA -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Existencia</label>
                                        <input type="number" name="existencia" value="{{ old('stock') }}" placeholder="" class="form-control text-upper" min="1">
                                        @error('stock')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion MARCA -------------------------->
                                @php($marcasLlantas = DB::table('marca_baterias')->get() )
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Marca</label>
                                        <select name="idMarca" id="selectorMarca" class="form-control form-select">
                                            <option value="0">Seleccionar</option>
                                            @foreach($marcasLlantas as $marca)
                                                <option value="{{$marca->idMarca}}">{{$marca->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion TAMANIO -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Tamaño</label>
                                        <input type="number" name="tamanio" value="{{ old('stock') }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion VOLTAJE -------------------------->
                                <div class="col-md-4 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Voltaje</label>
                                        <input type="number" name="voltaje" value="{{ old('stock') }}" placeholder="" class="form-control text-upper" min="1">
                                    </div>
                                </div>
                                <!--------------------------Inputs de la informacion DESCRIPCION-------------------------->
                                <div class="col-md-8 mt-2">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Descripción</label>
                                        <textarea class="form-control text-upper" placeholder="" name="descripcion">{{ old('descripcion') }}</textarea>
                                        {{-- validaciones --}}
                                        @error('descripcion')
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
                                    <a title="cancelar producto" href="./" class="btn btn-primary btn-ms">Regresar
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