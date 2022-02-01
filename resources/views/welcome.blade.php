@extends('layouts.main')
@section('titulo', 'Bienvenido')
@section('contenido')
@guest
@include('layouts.nav-log')

{{-- incluye vista inicio --}}
<div class="">
    <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="https://wallpapercave.com/wp/wp3766140.jpg"
                        class="img-fluid d-block w-100" alt="">
                </div>


                <div class="carousel-item" data-bs-interval="1000">
                    <img src="https://wallpapercave.com/wp/wp3766139.jpg"
                        class="img-fluid d-block w-100" alt="...">
                </div>


                <div class="carousel-item" data-bs-interval="1000">
                    <img src="https://wallpapercave.com/wp/wp3766143.jpg"
                        class="img-fluid d-block w-100" alt="...">
                </div>


            </div>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->

    <!--========================================================== -->
    <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->

    <!-- <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
            <h1 class="p-3 fs-2 border-top border-3"> <span class="text-success"> “la innovación al servicio de la movilidad”</span></h1>
            <p class="p-3  fs-4">
                <span class="text-success">Michelin.</span> es un empresa francesa 
                especializada en la fabricación de neumáticos fundada por los hermanos Édouard Michelin
                 y André Michelin el 28 de mayo de 1889 desarrollado para neumáticos de bicicleta.
            </p>
        </section> -->

    <!--========================================================== -->
    <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->
    <section class="container">
        <div class="row d-flex justify-content-center">
            @component('plantilla.infoLDP')
            @slot('iconoInfo','fas fa-shopping-bag')
            <!--Por mientras no lleva nada-->
            @slot('texto1','Venta de neumáticos')
            <!---->
            @slot('texto2','¡Adquiere tus productos al mejor precio!')
            <!---->
            @endcomponent

            @component('plantilla.infoLDP')
            @slot('iconoInfo','fas fa-dollar-sign')
            <!--Por mientras no lleva nada-->
            @slot('texto1','Promociones')
            <!---->
            @slot('texto2','Enterate de todas las promociones')
            <!---->
            @endcomponent

            @component('plantilla.infoLDP')
            @slot('iconoInfo','fas fa-search-dollar')
            <!--Por mientras no lleva nada-->
            @slot('texto1','Precios')
            <!---->
            @slot('texto2','Pregunte sobre los precios')
            <!---->
            @endcomponent
        </div>
    </section>
    <!--==================================================-->
    <!--==========  Main                 ===========-->
    <!--==================================================-->
    <section class="d-flex flex-column  align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <div class="col-12">
            <h1 class="p-3 fs-2 border-top border-3 text-dark"> Misión</h1>
            <!--Aqui va un icono-->
            <i class="h1 far fa-flag"></i>

            <p class="p-3 text-justify">
                Estamos comprometidos a proveer productos, servicios y atención de la más
                alta calidad, respetando y preservando nuestro entorno, brindando seguridad
                y confianza a nuestros clientes y proveedores.
            </p>
        </div>
        <div class="col-12">
            <h1 class="p-3 border-top border-3 text-dark">Visión</h1>
            <!--Aqui va un icono-->
            <i class="h1 far fa-eye"></i>
            <p class="p-3 fs-4 text-justify">
                Cumplir las necesidades de nuestros clientes, permitiéndonos ser indudablemente la mejor opción del
                mercado de llantas y baterías para brindar una excelente atención a los automóviles.
            </p>
        </div>
    </section>




    <!--========================================================== -->
    <!-- SECCION ONDA-->
    <!--========================================================== -->
    <section id="seccion-contacto" class="border-bottom border-secondary border-2">
        <div id="bg-contactos">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>
        </div>
    </section>
    <!--========================================================== -->
    <!--FOOTER-->
    <!--========================================================== -->
    @component('plantilla.footerSimple')
    @endcomponent
</div>



@else

<!--==================================-->
<!--Parte del sistema-->
<!--==================================-->
{{-- parte del sistema --}}


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
            <div class="container-fluid rounded">
                <!-- Page Heading -->
                <h1 class="h4 mb-2">SISTEMAS DE VENTA DE NEUMÁTICOS</h1>
                <!-- <p class="mb-4 text-dark">“la innovación al servicio de la movilidad”</p> -->
                <!-- DataTales Example -->
                <div class="card shadow mb-4 rounded card-color mt-4">
                    <h5 class="card-header bg-color py-3 text-center"> ¡Bienvenido, {{ Auth::user()->name }}!</h5>
                    <div class="card shadow  rounded card-color">
                        <div class="container text-black2 text-center p-4">
                            <p>Bienvenido al sistema, esperemos que disfrute de su estancia, Gracias.</p>
                        </div>
                        {{-- end container --}}
                    </div>
                </div>
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
@endguest
@endsection
