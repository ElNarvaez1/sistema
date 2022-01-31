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
                <h1 class="h3 mb-2 bold-title"> REGISTRAR PRODUCTO <i class="fas fa-plus-circle mx-3"></i> </h1>
                <p class="mb-4 text-dark">Registre su producto aquí.</p>


                {{-- mensajes --}}
                @include('plantilla.notification')

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold ">Agregar producto</h6>
                    </div>

                    {{-- Formulario -> vista de productos --}}


                    <div class="container">

                        <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="row">
                                <!--
                                idProducto
idProveedor
                                -->
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  NOMBRE     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Nombre del producto*</label>
                                        <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Introduce el nombre del producto" class="form-control text-upper">
                                        {{-- validaciones --}}
                                        @error('nombre')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  DESCRIPCION     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->


                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Descripción*</label>
                                        <textarea class="form-control text-upper" placeholder="Descripción del producto..." name="descripcion">{{ old('descripcion') }}</textarea>

                                        {{-- validaciones --}}
                                        @error('descripcion')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Modelo     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Modelo*</label>
                                        <input type="text" name="modelo" value="{{ old('modelo') }}" placeholder="Introduce el modelo del producto" class="form-control text-upper">
                                        @error('modelo')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Imagen     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Agregar imagen*</label>
                                        <!-- Upload image input-->
                                        <input type="file" name="imagen" accept="image/*" placeholder="Inserte una imagen" class="form-control text-upper">
                                        {{-- validaciones --}}
                                        @error('imagen')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Precio compra     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio compra* $</label>
                                        <input type="number" min="0" name="precio_c" value="{{ old('precio_c') }}" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper">

                                        {{-- validaciones --}}
                                        @error('precio_c')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Precio venta     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Precio venta* $</label>
                                        <input type="number" min="0" name="precio_v" value="{{ old('precio_v') }}" placeholder="Introduce precio del producto 0.0 $" class="form-control text-upper">
                                        {{-- validaciones --}}
                                        @error('precio_v')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Existencia     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->


                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="fs-5 text-body">Existencia*</label>
                                        <input type="number" name="stock" value="{{ old('stock') }}" placeholder="En existencia" class="form-control text-upper" min="1">
                                        {{-- validaciones --}}
                                        @error('stock')
                                        <div class="message-error">*{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     INPUT  Proveedor     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                @php(
                                $proveedores = DB::table('proveedores')->get()
                                )
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
                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   Seecion de sub formulario   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

                                <h2 class="col-12 text-dark h5 my-3">Informacion individual</h2>
                                <input type="hidden" name="checkProducto" id="checkValue" value="llantas">
                                <div class="container-fluid">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item col-md-4" role="presentation">
                                            <label id="tipo-llantas" class="nav-link text-dark w-100 active" data-name="llantas" data-bs-toggle="tab" data-bs-target="#llantas-seccion" type="button" role="tab" aria-controls="home" aria-selected="true">Llantas</label>
                                        </li>
                                        <li class="nav-item col-md-4" role="presentation">
                                            <label id="tipo-baterias" class="nav-link text-dark w-100" data-name="baterias" data-bs-toggle="tab" data-bs-target="#baterias-seccion" type="button" role="tab" aria-controls="profile" aria-selected="false">Baterias</label>
                                        </li>
                                        <li class="nav-item col-md-4" role="presentation">
                                            <label id="tipo-rin" class="nav-link text-dark w-100" data-name="rin" data-bs-toggle="tab" data-bs-target="#rin-seccion" type="button" role="tab" aria-controls="profile" aria-selected="false">Rin</label>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="llantas-seccion" role="tabpanel" aria-labelledby="tipo-llantas">
                                            <div class="row pt-3">
                                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre las llantas</h3>
                                                <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   SECCION DEL ID DEL RIN   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
                                                @php(
                                                $rines = DB::table('rin')->get()
                                                )
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Rines*</label>
                                                        <select title="" class="form-control text-upper" name="rin">
                                                            <option value="0">Seleccione Rin</option>
                                                            @foreach ($rines as $rin)
                                                            <option value="{{$rin->idRin}}">{{$rin->numero}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!----------------------- CAJA DE TEXTO *carga Maxima* ---------------------------------------------->

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Indice de Carga* (Carga Maxima)</label>
                                                        <input type="number" min="0" name="cargaMaxima" id="idcargaMaxima" value="{{old('cargaMaxima')}}" class="form-control text-upper">
                                                        @error('cargaMaxima')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!----------------------- CAJA DE TEXTO *velocidad Maxima* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">velocidad Maxima*</label>
                                                        <input type="number" name="velocidadMaxima" value="{{ old('velocidadMaxima') }}" class="form-control text-upper" min="1">
                                                        @error('velocidadMaxima')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!----------------------- CAJA DE Presion ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Presion*</label>
                                                        <input type="number" name="presion" value="{{ old('presion') }}" class="form-control text-upper" min="1">
                                                        @error('presion')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!----------------------- CAJA DE TEXTO *Anvcho* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Ancho*</label>
                                                        <input type="number" name="anchoLlanta" value="{{ old('anchoLlanta') }}" class="form-control text-upper" min="1">
                                                        @error('anchoLlanta')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Diametro*</label>
                                                        <input type="number" name="diametro" value="{{ old('diametro') }}" class="form-control text-upper" min="1">
                                                        @error('diametro')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!----------------------- CAJA DE TEXTO *Diamrtro* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Fabricante*</label>
                                                        <input type="text" name="fabricante" value="{{ old('fabricante') }}" class="form-control text-upper" min="1">
                                                        @error('fabricante')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!----------------------- CAJA DE TEXTO *Año fabricacnion* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Año fabricante*</label>
                                                        <input type="text" name="aniofabricante" value="{{ old('aniofabricante') }}" class="form-control text-upper" min="1">
                                                        @error('aniofabricante')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!----------------------- CAJA DE TEXTO *Tipo carrp* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Tipo carro*</label>
                                                        <input type="text" name="tipoCarro" value="{{ old('tipoCarro') }}" class="form-control text-upper" min="1">
                                                        @error('tipoCarro')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!----------------------- CAJA DE TEXTO *marca carrp* ---------------------------------------------->
                                                <div class="col-md-4 mt-4">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Marca carro*</label>
                                                        <input type="text" name="marcaCarro" value="{{ old('marcaCarro') }}" class="form-control text-upper" min="1">
                                                        @error('marcaCarro')
                                                        <div class="message-error">*{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="baterias-seccion" role="tabpanel" aria-labelledby="tipo-baterias">
                                            <div class="row">
                                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre baterias</h3>
                                                <!--------------------------Inputs de la informacion ALTO -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Alto*</label>
                                                        <input type="number" name="alto" value="{{ old('alto') }}" placeholder="" class="form-control text-upper" min="1">
                                                        @error('alto')
                                                            <div class="message-error">*{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion ancho -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Ancho*</label>
                                                        <input type="number" name="ancho" value="{{ old('ancho') }}" placeholder="" class="form-control text-upper" min="1">
                                                        @error('ancho')
                                                            <div class="message-error">*{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion LARGO -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Largo*</label>
                                                        <input type="number" name="largo" value="{{ old('largo') }}" placeholder="" class="form-control text-upper" min="1">
                                                        @error('largo')
                                                            <div class="message-error">*{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion Amperes -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Amperes*</label>
                                                        <input type="number" name="amperes" value="{{ old('amperes') }}" placeholder="" class="form-control text-upper" min="1">
                                                        @error('amperes')
                                                            <div class="message-error">*{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion PERO -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Peso*</label>
                                                        <input type="number" name="peso" value="{{ old('peso') }}" placeholder="" class="form-control text-upper" min="1">
                                                        @error('peso')
                                                            <div class="message-error">*{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <!--------------------------Inputs de la informacion MARCA -------------------------->
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Marca*</label>
                                                        <select name="idMarca" id="selectorMarca" class="form-control form-select">
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
                                                        <input type="number" name="voltaje" value="{{ old('stock') }}" placeholder="" class="form-control text-upper" min="1">
                                                        @error('voltaje')
                                                            <div class="message-error">*{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="tab-pane fad" id="rin-seccion" role="tabpanel" aria-labelledby="tipo-rin">
                                            <!--- 
                                                    idRin
                                                    numero
                                                ---->
                                            <div class="row">
                                                <h3 class="col-12 text-dark h5 my-3 fw-bold" style="font-weight: bold;">Informacion individual sobre los rines</h3>
                                                <div class="col-md-4 mt-2">
                                                    <div class="form-group">
                                                        <label class="fs-5 text-body">Numero de rin*</label>
                                                        <input type="number" name="numeroRin" value="{{ old('numeroRin') }}" placeholder="" class="form-control text-upper" min="1">
                                                        @error('numeroRin')
                                                            <div class="message-error">*{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<script>
    const putValue = (e) => {
        let inputHiden = document.getElementById('checkValue');
        inputHiden.value = e.target.dataset.name;
    }
    let botonLlantas = document.getElementById('tipo-llantas');
    let botonBateria = document.getElementById('tipo-baterias');
    let botonRin = document.getElementById('tipo-rin');
    botonLlantas.addEventListener('click', putValue);
    botonBateria.addEventListener('click', putValue);
    botonRin.addEventListener('click', putValue);
</script>
<!-- End of Page Wrapper -->

@endsection