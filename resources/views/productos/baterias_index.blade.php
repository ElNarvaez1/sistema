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

                            <form action="{{ route('productos.index', [$productos]) }}" method="GET">
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
                                        <th scope="col">ID</th>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">DESCRIPCIÓN</th>
                                        <th scope="col">MODELO</th>
                                        <th scope="col">TIPO</th>
                                        <th scope="col">PRECIO COMPRA</th>
                                        <th scope="col">PRECIO VENTA</th>
                                        <th scope="col">EXISTENCIA</th>
                                        <th scope="col" colspan="2">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody class="text-black2">
                                    @forelse ($productos as $producto)
                                    <tr class="table-hover">
                                        <th scope="row">{{ $producto->id }}</th>

                                        <td>
                                            @can('productos.show')
                                            <a class="text-center" href="{{ route('productos.show', [$producto]) }}">

                                                {{ $producto->nombre }}
                                            </a>
                                            @endcan
                                        </td>

                                        <td class="text-justify">{{ $producto->descripcion }}</td>
                                        <td class="text-center">{{ $producto->modelo }}</td>
                                        <td class="text-center">{{ $producto->tipo }}</td>
                                        <td class="text-center">$ {{ $producto->precio_c }}</td>
                                        <td class="text-center">$ {{ $producto->precio_v }}</td>
                                        @if ($producto->stock>5)
                                        <h5>
                                            <td class="badge badge-success">{{ $producto->stock }}</td>
                                        </h5>
                                        @elseif ($producto->stock == 0)
                                        <h5>
                                            <td class="badge badge-danger">{{ $producto->stock }}</td>
                                        </h5>
                                        @else
                                        <h5>
                                            <td class="badge badge-warning">{{ $producto->stock }}</td>
                                        </h5>
                                        @endif


                                        <td>
                                            @can('productos.edit')
                                            <a title="editar producto" href="{{ route('productos.edit', [$producto]) }}" class="btn btn-outline-primary btn-circle">
                                                <i class="fa fa-edit"></i></a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('productos.destroy')
                                            <form action="{{ route('productos.destroy', [$producto]) }}" method="post">
                                                @method("delete")
                                                @csrf
                                                <button title="borrar producto" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @empty
                                    <h3 class="text-black text-center"> ¡No hay registros!</h3>
                                    @endforelse
                                </tbody>
                            </table>

                            <nav aria-label="Page navigation example float-right">
                                <a href="{{ route('productos.index')}}" class="btn btn-outline-primary mx-3 mt-3 ">refrescar</a>
                                <ul class="pagination float-right mt-3">
                                    <li class="page-item"><a class="page-link" href="{{ $productos->previousPageUrl() }}">Anterior</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $productos->url(1) }}">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="{{ $productos->url(2) }}">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="{{ $productos->url(3) }}">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="{{ $productos->nextPageUrl() }}">Siguiente</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @else
                    <div class="card-body ">
                        <div class=" row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <a href="{{ route('productos.index')}}" class="btn btn-outline-primary">regresar</a>
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