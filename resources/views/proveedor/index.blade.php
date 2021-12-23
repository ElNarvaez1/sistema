@extends('layouts.main')
@section('titulo', 'Proveedores')
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
                    <h1 class="h3 mb-2 bold-title text-upper"> Listado de Proveedores <i class="fas fa-clipboard-list"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de sus proveedores.</p>
                    {{-- mensajes --}}
                    @include('plantilla.notification')


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de proveedores por tipo</h6>
                        </div>
                        
                        
                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                
                                {{-- <form action="{{route('proveedor.index',[$proveedor])}}" method="GET"> --}}
                                    <form action="" method="GET">
                                    <div class="row">

                                        {{-- add product --}}
                                        <div class="col-md-3 mt-4">
                                            <div class="form-group">
                                                <a title="agregar nuevo cliente" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"
                                                    href="{{route('proveedor.create')}}"> 
                                                     Nuevo Proveedor  <i class="fas fa-clipboard-list"></i>
                                                </a>
                                            </div>
                                        </div>

                                        
                                    </form>
                                  
                                </div>
                                {{-- end container --}}
                            </div>
                            @if ($proveedores->count()))
                            <div class="card-body ">
                              
                               
                                
                               <div class="table-responsive">
                                    {{-- id="dataTable" --}}
                                    <table class="table  table-light mt-2" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">APELLIDO PATERNO</th>
                                                <th scope="col">APELLIDO MATERNO</th>
                                                <th scope="col">EMPRESA</th>
                                                <th scope="col">DIRECCION</th>
                                                <th scope="col">E-MAIL</th>
                                                <th scope="col">TELEFONO</th>
                                                
                                                <th scope="col" colspan="2">ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            @forelse ($proveedores as $proveedor)
                                                <tr class="table-hover">
                                                   <th scope="row">{{ $proveedor->idProveedor}}</th>

                                                    <td>
                                                        

                                                            {{ $proveedor->nombre }}
                                                       
                                                    </td>

                                                    
                                                    
                                                    <td class="text-center">{{ $proveedor->apellidoPaterno }}</td>
                                                    <td class="text-center"> {{ $proveedor->apellidoMaterno }}</td>
                                                    <td class="text-center"> {{ $proveedor->nombreEmpresa}}</td>
                                                    <td class="text-center"> {{ $proveedor->direccion  }}</td>
                                                    <td class="text-center"> {{ $proveedor->correo  }}</td>
                                                    <td class="text-center"> {{ $proveedor->telefono  }}</td>
                                                    
                                                    
                                                           

                                                    
                                                    <td>
                                                        {{-- @can('proveedor.index') --}}
                                                        <a title="editar datos" href="{{ route('proveedor.edit', $proveedor->idProveedor) }}" class="btn btn-outline-primary btn-circle">
                                                            <i class="fa fa-edit"></i></a>
                                                        {{-- @endcan --}}
                                                    </td>
                                                    <td>
                                                        {{-- @can('proveedor.index') --}}
                                                        <form action="{{ route('proveedor.destroy', $proveedor->idProveedor ) }}" method="POST">
                                                            @method("delete")
                                                            @csrf
                                                            <button title="borrar producto" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form> 
                                                        {{-- @endcan --}}
                                                    </td>
                                                </tr>
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
                                        <a href="{{ route('proveedor.index')}}" class="btn btn-outline-primary" >regresar</a>
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

                    <!-- Footer -->
                    @include('plantilla.footer')
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

        @endsection
