@extends('layouts.main')
@section('titulo', 'Agregar Bateria')
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
                <h1 class="h3 mb-2 bold-title"> PRODUCTOS - BATERÍAS <i class="fas fa-boxes"></i></h1>
                <p class="mb-4 text-dark">Registro de baterías nuevas.</p>


                {{-- mensajes --}}
                @include('plantilla.notification')

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold">Agrega, edite y elimine baterías.</h6>
                    </div>


                    <div class="card shadow  rounded card-color">
                        <div class="container">

                            <form action="{{ route('bateria.index') }}" method="GET">
                                <div class="row">

                                    {{-- add product --}}
                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <a title="agregar producto" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2" href="{{ route('bateria.create') }}">
                                                <i class="fas fa-plus-circle"></i>
                                                Agregar batería
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            @php($arrayB = [
                                            'nombre',
                                            'descripcion',
                                            'modelo',
                                            'tipo',
                                            // 'PRECIO COMPRA','PRECIO VENTA'
                                            ])
                                            <select title="buscar por" class="form-control text-upper" name="type">
                                                @foreach ($arrayB as $buscar)
                                                <option>{{ $buscar }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <input class="form-control" name="buscarpor" type="search" placeholder="Buscar">
                                        </div>
                                    </div>


                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <button title="buscar" class="btn btn-outline-primary text-black2" type="submit">Buscar</button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>
                        {{-- end container --}}
                    </div>
                    @if ($productos->count()))
                    <div class="card-body ">


                        <div class="table-responsive">
                            {{-- id="dataTable" --}}
                            <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                <thead class="bg-color ">
                                    <tr class="text-blank text-center">

                                        <th scope="col">idBateria</th>
                                        <th scope="col">idMarca</th>
                                        <th scope="col">tamaño</th>
                                        <th scope="col">modelo</th>
                                        <th scope="col">voltaje</th>

                                        <th scope="col" colspan="2">ACCIONES</th>
                                    </tr>
                                </thead>
                                {{route('bateria.index')}}
                                <tbody class="text-black2">
                                    @foreach ($productos as $baterium)
                                    <tr class="table-hover">
                                        <td>
                                            <a class="text-center" href="">
                                                {{ $baterium->idMarca }}
                                            </a>
                                        </td>
                                        <td class="text-center">{{$baterium->idMarca }}</td>
                                        <td class="text-center">{{$baterium->tamanio }}</td>
                                        <td class="text-center">{{ $baterium->modelo }}</td>
                                        <td class="text-center">{{ $baterium->voltaje }}</td>

                                        <td>
                                            @can('bateria.edit')
                                            <a title="editar producto" href="{{ route('bateria.edit', $baterium) }}" class="btn btn-outline-primary btn-circle">
                                                <i class="fa fa-edit"></i></a>
                                            @endcan
                                        </td>
                                        <td>
                                            <form action="{{ route('bateria.destroy', $baterium) }}" method="post">
                                                @method("delete")
                                                @csrf
                                                <button title="borrar producto" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                    <div class="card-body ">
                        <div class=" row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <a href="{{ route('bateria.index')}}" class="btn btn-outline-primary">regresar</a>
                                </div>
                            </div>

                            <div class="col-md-8 mt-4">
                                <div class="form-group">

                                    <strong class="card-title">¡No hay registros!</strong>

                                </div>
                            </div>
                        </div>


                    </div>
                    @endif

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