@extends('layouts.main')
@section('titulo', 'Devoluciones')
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
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Devoluciones  <i class="fas fa-user"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de las devoluciones aquí.</p>


                    {{-- mensajes --}}
                    @include('plantilla.notification')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de devoluciones</h6>
                        </div>


                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                
                                {{-- <form action="{{ route('devoluciones.index', [$devoluciones]) }}" method="GET"> --}}
                                    <form action="{{ route('devoluciones.index',[$devoluciones]) }}" method="GET">
                                    <div class="row">                                        

                                        <div class="col-md-2 mt-4">
                                            <div class="form-group">
                                                @php($arrayB = [
                                                    'idVenta',
                                                    'observacion'                                                                                                   
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
                                                    <input class="form-control" name="buscarpor" type="search"
                                                        placeholder="Buscar">

                                                </div>
                                            </div>


                                            <div class="col-md-3 mt-4">
                                                <div class="form-group">
                                                    <button title="buscar" class="btn btn-outline-primary text-black2"
                                                        type="submit">Buscar</button>

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                  
                                </div>
                                {{-- end container --}}
                            </div>
                            @if ($devoluciones->count()))
                            <div class="card-body ">
                              
                               
                                
                               <div class="table-responsive">
                                    {{-- id="dataTable" --}}
                                    <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">IDVENTA</th>
                                                <th scope="col">MOTIVO DEVOLUCION</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            @forelse ($devoluciones as $devolucion)
                                                <tr class="table-hover">
                                                    <th scope="row">{{ $devolucion->idVenta }}</th>

                                                    <td class="text-center">{{ $devolucion->observacion }} </td>                                  
                                                           

                                                    
                                                    
                                                </tr>
                                            @empty
                                            <h3 class="text-black text-center"> ¡No hay registros!</h3>
                                     @endforelse
                                        </tbody>
                                    </table>

                                    <nav aria-label="Page navigation example float-right">
                                        <a href="{{ route('devoluciones.index')}}" class="btn btn-outline-primary mx-3 mt-3 " >refrescar</a>
                                        <ul class="pagination float-right mt-3">
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $devoluciones->previousPageUrl() }}">Anterior</a></li>
                                            <li class="page-item"><a class="page-link" href="{{ $devoluciones->url(1) }}">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="{{ $devoluciones->url(2) }}">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="{{ $devoluciones->url(3) }}">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $devoluciones->nextPageUrl() }}">Siguiente</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            @else
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="{{ route('devoluciones.index')}}" class="btn btn-outline-primary" >regresar</a>
                                    </div>
                                </div>
                                
                                <div class="col-md-8 mt-4">
                                    <div class="form-group">
                                        
                                            <strong class ="card-title">¡No hay registros!</strong>
                                       
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
