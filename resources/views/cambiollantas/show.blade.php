@extends('layouts.main')
@section('titulo', 'Detalles del cambio de llantas')
@section('contenido')
<div id="wrapper">    
        {{-- incluimos sildebar color: azul :) --}}
        @include('plantilla.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                        @include('layouts.nav-log')
                        <div class="container-fluid rounded color">
                                <br>
                                <h1 class="h3 mb-2 bold-title"> Información del cambio de llanta<i class="fas fa-eye mx-3"></i></h1>
                                <p class="mb-4 text-dark">Verifique los datos del servicio aquí.</p>
                                <div class="card shadow mb-4 rounded card-color">
                                        <div class="card-header py-3 bg-color">
                                                <h6 class="m-0 font-weight-bold ">ID Cambio: {{$cambio->idCambio}}</h6>
                                        </div>
                                        {{-- Formulario -> detalles cambio llantas --}}
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-4 mt-4">
                                                                <label class="text-black h4">Fecha de registro</label>
                                                                <input type="text" disabled="true" name="nombre" value="{{$cambio->fecha}}" placeholder="Nombre del Proveedor" class="form-control text-upper">
                                                        </div>
                                                        <div class="col-md-4 mt-4">
                                                                <label class="text-black h4">Monto</label>
                                                                <input type="text" name="nombre" disabled="true" value="{{$cambio->monto}}" placeholder="Nombre del Proveedor" class="form-control text-upper">
                                                        </div>
                                                        <div class="col-md-4 mt-4">
                                                                <label class="text-black h4">Empleado</label>
                                                                <input type="text" name="nombre" disabled="true" value="{{$cambio->idUser}}" placeholder="Nombre del Proveedor" class="form-control text-upper">
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-6 mt-4">
                                                                <label class="text-black">Descripción sobre el cambio de neumáticos:</label>
                                                                <textarea class="form-control" disabled="true" value="" name="descripcion" placeholder="Descripción" required>{{$cambio->descripcion}}</textarea>
                                                        </div>
                                                </div>
                                                <hr>
                                                <div class="row justify-content-center mt-4">
                                                <div class="col-auto">
                                                <a title="cancelar producto" href="{{route('cambiollantas.index')}}" class="btn btn-danger btn-ms">regresar
                                                    <i class="fas fa-strikethrough"></i></a>
                                                 </div>
                                                </div>
                                        </div>
                                </div>

                        </div>
                </div>
        @include('plantilla.footer')
        </div>
</div>



@endsection