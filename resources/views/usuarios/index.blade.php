@extends('layouts.main')
@section('titulo', 'Usuarios')
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
                @can('user.index')
                <!-- Begin Page Content -->
                <div class="container-fluid rounded color">
                    <br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 bold-title text-upper"> Usuarios  <i class="fas fa-users fa-fw"></i></h1>
                    <p class="mb-4 text-dark">Consulte los datos de sus usuarios aquí.</p>


                    {{-- mensajes --}}
                    @include('plantilla.notification')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold">Búsqueda de usuarios</h6>
                        </div>


                        <div class="card shadow  rounded card-color">
                            <div class="container">
                                @can('user.index')
                                <form action="{{ route('user.index', [$users]) }}" method="GET"> 
                                                                    
                                    <div class="row">

                                    {{-- add product --}}
                                        <div class="col-md-3 mt-4">
                                            <div class="form-group">
                                                <a title="Agregar nuevo empleado" type="button" class="btn btn-outline-primary btn-auto mx-3 text-black2"
                                                    href="{{ route('user.create') }}"> 
                                                     Nuevo empleado <i class="fas fa-plus-circle"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-2 mt-4">
                                            <div class="form-group">
                                                @php($arrayB = [
                                                    ['name','NOMBRE'],
                                                    ['username','NOMBRE DE USUARIO'],
                                                    ['email','CORREO ELECTRÓNICO']
                                                    ])
                                                    <select  title="buscar por" class="form-control" name="type">
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
                                    @endcan
                                </div>
                                {{-- end container --}}
                            </div>
                             @if ($users->count()))
                            <div class="card-body ">
                                <div class="table-responsive">
                                    {{-- id="dataTable" --}}
                                    <table class="table  table-light" width="100%" cellspacing="0">
                                        <thead class="bg-color ">
                                            <tr class="text-blank text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">NOMBRE DE USUARIO</th>
                                                <th scope="col">CORREO ELECTRÓNICO</th>
                                                <th scope="col">NÚMERO DE CONTACTO</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">APELLIDO PATERNO</th>
                                                <th scope="col">FECHA DE CREACIÓN</th>
                                                <th scope="col">OPERACIONES</th>
                                                {{-- <th scope="col">ELIMINAR</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody class="text-black2">
                                            @can('user.index')
                                            @foreach ($users as $user)
                                                <tr class="table-hover"> 
                                                    <td scope="row">{{ $user->id }}</td>
                                                    <td class="text-center">{{ $user->username }}</td>
                                                    <td class="text-center">{{ $user->email }}</td>
                                                    <td class="text-center">{{ $user->telefono }}</td> 
                                                    <td class="text-center">{{ $user->name }}</td> 
                                                    <td class="text-center">{{ $user->apellidoPaterno }}</td> 
                                                    <td class="text-center">{{ $user->created_at }}</td>                                                
                                                    <td class="text-center">

                                                            {{-- @can('user.index') --}}
                                                        <a title="editar datos" href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-primary btn-circle">
                                                            <i class="fa fa-edit"></i></a>
                                                        {{-- @endcan --}}
                                                        
                                                        @if (strcmp($user->id, "Admin") !== 0)
                                                        {{-- @can('productos.destroy') --}}
                                                        <form action="{{ route('user.destroy', $user->id) }}"
                                                            method="post">
                                                            @method("delete")
                                                            @csrf
                                                            <button title="borrar empleado" type="submit" class="btn btn-outline-danger btn-circle btn-delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form> 
                                                        {{-- @endcan --}}
                                                        @endif

                                                           
                                                    </td>
                                                
                                                </tr>
                                                
                                                @endforeach
                                                @endcan
                                        </tbody>
                                    </table>
                                    
                                    
                                    <nav aria-label="Page navigation example float-right">
                                        <a href="{{ route('user.index')}}" class="btn btn-outline-primary mx-3 mt-3 " >Refrescar</a>
                                        <ul class="pagination float-right mt-3">
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $users->previousPageUrl() }}">Anterior</a></li>
                                            <li class="page-item"><a class="page-link" href="{{ $users->url(1) }}">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="{{ $users->url(2) }}">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="{{ $users->url(3) }}">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $users->nextPageUrl() }}">Siguiente</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            @else
                            <div class="card-body ">
                               <div class=" row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <a href="{{ route('user.index')}}" class="btn btn-outline-primary" >regresar</a>
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
                    @endcan
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
