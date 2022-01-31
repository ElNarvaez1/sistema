@extends('layouts.main')
@section('titulo', 'Cambio de llantas')
@section('contenido')


    
    <div id="wrapper">
        {{-- incluimos sildebar color: azul :) --}}
        @include('plantilla.sidebar')        
        <div id="content-wrapper" class="d-flex flex-column">
            
            <div id="content">
                @include('layouts.nav-log')   
                <div class="container-fluid rounded color">
                    <br>
                    <!--encabezado-->                    
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Cambios de llantas  <i class="fas fa-tools"></i></h1>
                    <p class="mb-4 text-dark">Consulte la información historica sobre el cambio de llantas</p>
                    {{-- mensajes --}}
                    @include('plantilla.notification')
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de cambio de llantas</h6>
                        </div>
                        <div class="card shadow  rounded card-color">
                            <div class="container">
                            <form action="{{ route('cambiollantas.index', [$listaCambioLlantas]) }}" method="GET">
                                <div class="row">
                                {{-- cambiar llantas --}}
                                    <div class="col-md-3 mt-4">
                                        <div class="form-group">
                                            <a title="agregar nuevo cliente" href="{{ route('cambiollantas.create') }}" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"> 
                                                        Nuevo cambio llantas <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            @php($arrayB = [
                                                        ['idCambio','ID CAMBIO'],
                                                        ['fecha','FECHA']
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
                                            <input class="form-control" name="buscarpor" type="search"  placeholder="Buscar">
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
                            @if ($listaCambioLlantas->count()))
                            <div class="card-body "> 
                                <div class="table-responsive">
                                {{-- id="dataTable" --}}
                                    <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">IDCambioLlanta</th>
                                                <th scope="col">fecha</th>                                               
                                                <th scope="col">total</th>
                                                <th scope="col">Empleado</th>                                                
                                                <th scope="col" colspan="2">ACCIONES</th>                                                
                                            </tr>
                                            <tbody class="text-black2">
                                            @forelse ($listaCambioLlantas as $cambio)
                                                <tr class="table-hover">
                                                    <th class="text-center" scope="row">{{$cambio->idCambio}}</th>
                                                    <th class="text-center" scope="row">{{$cambio->fecha}}</th>                                                    
                                                    <th class="text-center" scope="row">${{$cambio->monto}}</th>
                                                    <th class="text-center" scope="row">{{$cambio->idUser}}</th>
                                                    <th class="text-center" scope="row">
                                                    {{-- @can('cambiollantas.index') --}}
                                                        <a title="Ver mas" href="{{ route('cambio.show', $cambio->idCambio)}}" class="btn btn-outline-primary btn-circle"> <i class="fa fa-eye"></i></a>
                                                    {{-- @endcan --}}
                                                    </th>
                                                </tr>
                                            @empty
                                                <h3 class="text-black text-center"> ¡No hay registros!</h3>
                                            @endforelse
                                            <tbody>
                                            <!--<h3 class="text-black text-center"> ¡No hay registros!</h3>-->
                                        </thead>
                                    </table>
                                        <nav aria-label="Page navigation example float-right">
                                            <a class="btn btn-outline-primary mx-3 mt-3 " >refrescar</a>
                                            <ul class="pagination float-right mt-3">
                                                <li class="page-item"><a class="page-link">Anterior</a></li>
                                                <li class="page-item"><a class="page-link">1</a></li>                                                
                                                <li class="page-item"><a class="page-link">Siguiente</a></li>
                                            </ul>
                                        </nav>
                                </div>
                            </div>
                            @else
                            <div class="card-body ">
                               <div class=" row">
                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <a href="" class="btn btn-outline-primary" >regresar</a>
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
                    </div>          
                </div>   
                    @include('plantilla.footer')                   
            <div>

        </div>
                

    </div>
            
           
@endsection