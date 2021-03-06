@extends('layouts.main')
@section('titulo', 'Ventas')
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
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Ventas  <i class="fas fa-cart-arrow-down"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de sus ventas aquí.</p>
                    {{-- mensajes --}}
                    @include('plantilla.notification')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de ventas</h6>
                        </div>
    
                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                
                                {{-- <form action="{{ route('productos.index', [$productos]) }}" method="GET"> --}}
                                    <form action="{{ route('venta.index',[$sales]) }}" method="GET">
                                    <div class="row">

                                        {{-- add product --}}
                                        <div class="col-md-3 mt-4">
                                            <div class="form-group">
                                                <a title="agregar nuevo cliente" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"
                                                    href="{{ route('venta.create') }}"> 
                                                     Nueva venta <i class="fas fa-cart-arrow-down"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 mt-4">
                                            <div class="form-group">
                                                @php($arrayB = [
                                                    ['idCliente','ID CLIENTE'],
                                                    ['fecha','FECHA'],
                                                    // 'PRECIO COMPRA','PRECIO VENTA'
                                                    ])
                                                    <select title="buscar por" class="form-control text-upper" name="type">
                                                        @foreach ($arrayB as $buscar)
                                                            <option value={{$buscar[0]}}>{{ $buscar[1] }}</option>
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
                            
                            @if ($sales->count()))
                            <div class="card-body ">
                               <div class="table-responsive">
                                    {{-- id="dataTable" --}}
                                    <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">ARTÍCULO</th>
                                                <th scope="col">FECHA</th>
                                                <th scope="col">% DE DESCUENTO</th>
                                                <th scope="col">TOTAL $</th>
                                                <th scope="col" colspan="3">ACCIÓN</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            @forelse ($sales as $venta)
                                                <tr class="table-hover">
                                                    <th scope="row">{{ $venta->idVenta }}</th>

                                                    <td>
                                                        {{-- @can('productos.show')
                                                        <a class="text-center"
                                                            href="{{ route('clientes.show', [$cliente]) }}"> --}}

                                                            {{ $venta->nombre }}
                                                        {{-- </a>
                                                        @endcan --}}
                                                    </td>

                                                    <td class="text-center">{{ $venta->idProducto }}</td>
                                                    <td class="text-center">{{ $venta->fecha }}</td>
                                                    <td class="text-center">{{ $venta->descuento }} %</td>
                                                    <td class="text-center"> $ {{ number_format($venta->totalVenta,2,'.','') }} MXN</td>
                                                           

                                                    
                                                    <td>
                                                        {{-- @can('client.edit') --}}
                                                        <a title="detalle venta" href="{{ route('venta.detalle_venta',$venta->idVenta) }}"
                                                            class="btn btn-outline-primary btn-circle">
                                                            <i class="fa fa-info-circle"></i></a>
                                                        {{-- @endcan --}}
                                                    </td>
                                                    <td>
                                                        {{-- @can('productos.destroy') --}}
                                                        <form action="{{ route('venta.delete', [$venta->idVenta]) }}" 
                                                            method="post">
                                                            @method("delete")
                                                            @csrf
                                                            <button title="Devolver" type="submit" class="btn btn-outline-danger btn-circle">
                                                                <i class="fa fa-reply-all"></i>
                                                            </button>
                                                        </form> 
                                                        {{-- @endcan --}}
                                                    </td>


                                                    <td>
                                                        {{-- @can('productos.destroy') --}}
                                                        
                                                            <a href="{{ route('venta.ticket', [$venta->idVenta])}}" target="_blank"
                                                            class="btn btn-outline-success btn-circle btn-download">
                                                               
                                                                <i class="fa fa-download"></i>
                                                            </a>
                                                      
                                                        {{-- @endcan --}}
                                                    </td>

                                                </tr>
                                            @empty
                                            <h3 class="text-black text-center"> ¡No hay registros!</h3>
                                     @endforelse
                                        </tbody>
                                    </table>

                                    <nav aria-label="Page navigation example float-right">
                                        <a href="{{ route('venta.index')}}" class="btn btn-outline-primary mx-3 mt-3 " >Refrescar</a>
                                        <ul class="pagination float-right mt-3">
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $sales->previousPageUrl() }}">Anterior</a></li>
                                            <li class="page-item"><a class="page-link" href="{{ $sales->url(1) }}">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="{{ $sales->url(2) }}">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="{{ $sales->url(3) }}">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $sales->nextPageUrl() }}">Siguiente</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            @else
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="{{ route('venta.index')}}" class="btn btn-outline-primary" >Regresar</a>
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
