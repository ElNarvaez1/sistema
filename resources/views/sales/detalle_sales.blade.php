@extends('layouts.main')
@section('titulo', 'Editar cliente')
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
                    <h1 class="h3 mb-2 bold-title"> VER DATOS DE LA VENTA <i class="fas fa-eye"></i> </h1>
                    <!--<p class="mb-4 text-dark">Actualice los datos de los clientes aquí.</p>-->


                    {{-- mensajes --}}
                    @include('plantilla.notification')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">ID de la venta: {{$venta->idVenta}}</h6>
                        </div>

                        {{-- Formulario -> vista de productos --}}

                        
                        <div class="container">
                           
                           
                                <div class="row">

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">ID del cliente*</label>
                                            <input type="text" name="idCliente" value="{{ old('idCliente',$venta->idCliente) }}"
                                                placeholder="ID del cliente" disabled
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('idCliente')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">ID del artículo*</label>
                                            <input type="text" name="idProducto" value="{{ old('idProducto',$venta->idProducto) }}"
                                                placeholder="articulo" disabled
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('idProducto')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Fecha*</label>
                                            <input type="text" name="fecha" value="{{ old('fecha',$venta->fecha) }}"
                                                placeholder="Fecha" disabled
                                                class="form-control text-upper">
                                            {{-- validaciones --}}
                                            @error('fecha')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Subtotal* ($)</label>
                                            <input type="text" name="subTotal" value="${{ number_format(old('subTotal',$venta->subVenta),2,'.','') }} MXN"
                                                placeholder="sub venta" disabled
                                                class="form-control text-upper">

                                            {{-- validaciones --}}
                                            @error('subTotal')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <label class="text-black h4">Descuento* (%)</label>
                                            <input type="text" name="descuento" class="form-control text-upper"
                                                placeholder="descuento" disabled value="{{ old('direccion',$venta->descuento) }} %"
                                                name="descuento">

                                            {{-- validaciones --}}
                                            @error('descuento')
                                                <div class="message-error">*{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                   

                                            <div class="col-md-4 mt-4">
                                                <div class="form-group">
                                                    <label class="text-black h4">Total* ($)</label>
                                                    <input type="text" name="totalVenta" value="${{ number_format(old('totalVenta',$venta->totalVenta),2,'.','') }} MXN"
                                                        placeholder="Total venta" disabled
                                                        class="form-control text-upper">

                                                    {{-- validaciones --}}
                                                    @error('totalVenta')
                                                        <div class="message-error">*{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                           



                                            
                                        </div>

                                        {{-- PARTE BOTONES --}}
                                        
                                        <div class="row justify-content-center mt-4">
                                            {{-- <div class="col-auto">
                                                <a title="guardar datos" href="{{route('clientes.edit',[$cliente])}}" class="btn btn-primary btn-ms">
                                                    ir a editar <i class="fas fa-edit"></i></a>
                                            </div> --}}
                                            
                                            <div class="col-auto">
                                                <a title="cancelar producto" href={{ route('venta.index') }} class="btn btn-danger btn-ms">Cancelar
                                                    <i class="fas fa-strikethrough"></i></a>
                                            </div>
                                       
                                        </div>
                                        <br>

                                    
                                    
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
