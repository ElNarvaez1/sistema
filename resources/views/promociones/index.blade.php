@extends('layouts.main')
@section('titulo', 'Mi perfil')
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
                    <h1 class="h3 mb-2 bold-title">Cambio de neumaticos<i class="fas fa-percentage mx-3"></i></h1>
                    <p class="mb-4 text-dark"></p>

                    @include('plantilla.notification')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 rounded card-color">
                        <div class="card-header py-3 bg-color">
                            <h6 class="m-0 font-weight-bold ">Registrar cambio de neumáticos</h6>
                        </div>

                      
                        {{-- Formulario -> vista de usuario --}}

                        <div class="container">
                            <div class="row">                               
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-6 col-lg-10 col-md-8">
                                                <div class="card o-hidden border-login my-5">
                                                    <div class="card-body p-0">
                                                        <div class="container px-5 my-5">
                                                            <div class="row">
                                                                <div class="right-content">
                                                                    <div class="container">
                                                                        <form id="contact" action="{{ route('promocion.send')}}"  method="post" enctype="multipart/form-data">
                                                                            {{ csrf_field() }}
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-md-12" style="text-align: center">
                                                                                    <label class="text-black"><FONT SIZE =4><b>Solo se registra el cambio de neumáticos para registros historicos.</b></FONT></label>
                                                                                    <br>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="text-center">                                                                                        
                                                                                </div>                                                                               
                                                                            <div class="col-md-12 mt-4">
                                                                                    <div class="form-group">
                                                                                    <label class="text-black"><FONT SIZE =3>Fecha en la que se esta realizando el servicio:</FONT></label>
                                                                                        <input id="fecha" type="date" value="<?php echo date("Y-n-j"); ?>"> <!--el codigo en php es para obtener la fecha actual-->
                                                                                        <label class="text-black"><FONT SIZE =3>Descripción sobre el cambio de neumáticos:</FONT></label>
                                                                                        <textarea class="form-control"
                                                                                        value="{{old('message')}}"    name="message" placeholder="Descripción"></textarea>
                                                                                        <br>
                                                                                        <label class="text-black h5"><FONT SIZE =3>Total del servicio $:</FONT></label>
                                                                                        <input id="number" type="number" value="0.00">
                                                                                    </div>
                                                                                    @error('message')
                                                                                    <div class="message-error">*{{ $message }}</div>
                                                                                @enderror                                                                                    
                                                                                </div>          
                                                                           <br><br>
                                                                                <div class="text-black h4" style="text-align: center;">
                                                                                <button class="btn btn-outline-primary" type="submit">Registrar cambio de llanta<!--<i class="fas fa-paper-plane"></i>--> </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>

                        <br><br>

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
