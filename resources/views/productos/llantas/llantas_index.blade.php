@extends('layouts.main')
@section('titulo', 'Agregar Llantas')
@section('contenido')

<!-- Page Wrapper -->
<div id="wrapper">
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
                <h1 class="h3 mb-2 bold-title"> PRODUCTOS - LLANTAS <i class="fas fa-boxes"></i></h1>
                <p class="mb-4 text-dark">Registro de llantas nuevas.</p>


                {{-- mensajes --}}
                @include('plantilla.notification')

                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color">
                    <div class="card-header py-3 bg-color">
                        <h6 class="m-0 font-weight-bold">Agrega, edite y elimine llantas.</h6>
                    </div>


                    <div class="card shadow  rounded card-color">
                        <div class="container">

                            <form action="{{ route('llantas.index') }}" method="GET">
                                <div class="row">

                                    {{-- add product --}}
                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <a title="agregar llanta" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2" href="{{ route('llantas.create') }}">
                                                <i class="fas fa-plus-circle"></i>
                                                Agregar llanta
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            @php($arrayB = [
                                            'id Llanta',
                                            'id Rin',
                                            'carga Maxima',
                                            'velocidad Maxima',
                                            'medida',
                                            'presion'
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
                                        <th scope="col">idLlanta</th>
                                        <th scope="col">idRin</th>
                                        <th scope="col">cargaMaxima</th>
                                        <th scope="col">velocidadMaxima</th>
                                        <th scope="col">medida</th>
                                        <th scope="col">presion</th>
                                        <th scope="col" colspan="2">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody class="text-black2">
                                    @forelse ($productos as $producto)
                                    <tr class="table-hover">
                                        <td class="text-center">{{$producto->idLlanta}}</td>
                                        <td class="text-center">{{$producto->idRin}}</td>
                                        <td class="text-center">{{$producto->cargaMaxima}}</td>
                                        <td class="text-center">{{$producto->velocidadMaxima}}</td>
                                        <td class="text-center">{{$producto->medida}}</td>
                                        <td class="text-center">{{$producto->presion}}</td>
                                        <td>
                                            <a title="editar producto" href="{{ route('llantas.edit', $producto->idLlanta) }}" class="btn btn-outline-primary btn-circle">
                                                <i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('llantas.destroy', $producto) }}" method="post">
                                                @method("delete")
                                                @csrf
                                                <button title="borrar producto" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- <tr class="table-hover">
                                        <th scope="row">{{ $producto->idLlanta }}</th>

                                        <td>
                                            @can('llantas.show')
                                            <a class="text-center" href="{{ route('llantas.show', [$producto]) }}">

                                                {{ $producto->idLlanta }}
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
                                            @can('llantas.edit')
                                            <a title="editar producto" href="{{ route('llantas.edit', [$producto]) }}" class="btn btn-outline-primary btn-circle">
                                                <i class="fa fa-edit"></i></a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('llantas.destroy')
                                            <form action="{{ route('llantas.destroy', [$producto]) }}" method="post">
                                                @method("delete")
                                                @csrf
                                                <button title="borrar producto" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr> -->
                                    @empty
                                    <h3 class="text-black text-center"> ¡No hay registros!</h3>
                                    @endforelse
                                </tbody>
                            </table>
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