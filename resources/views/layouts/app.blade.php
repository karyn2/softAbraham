<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('resources\css\app.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    


    <!-- Scripts  comentario niko -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

   <!-- Navbar--> 
     <div id="app">
            <nav class="navbar navbar-expand-md navbar-light">
            <div class=" container-fluid">
             <!--   <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                        <a class="navbar-botonmenu" href="#">
                            <i class="bi bi-list"></i>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>Institucion Educativa Siglo XX</b></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class=" dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" id="muenudrop">
                                <a class="dropdown-item" href="#">Perfil</a>
                                <a class="dropdown-item" href="#">Configuración</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @auth
<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 bg-blue">
            <!-- Contenido de la barra lateral -->

             <!-- Contenido de la barra lateral -->
             <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="" class="imagen-con-lineas">
                <img src="{{ asset('storage/images/logo.webp') }}" alt="Imagen 1" class="imagen-pequena"> 
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item ">
                        <a href="#" class="nav-link align-middle px-0">
                        <img src="{{ asset('storage\images\Inicio.png') }}" alt="Inicio" class="icono-sidebar"><span class="ms-1 d-none d-sm-inline ">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link align-middle px-0">
                        <img src="{{ asset('storage\images\usuario.png') }}" alt="usuario" class="icono-sidebar"> <span class="ms-1 d-none d-sm-inline ">Usuario</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link align-middle px-0">
                        <img src="{{ asset('storage\images\matricula.png') }}" alt="matricula" class="icono-sidebar"> <span class="ms-1 d-none d-sm-inline ">Matricula</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link align-middle px-0">
                        <img src="{{ asset('storage\images\notas.png') }}" alt="notas" class="icono-sidebar"> <span class="ms-1 d-none d-sm-inline vertical-center">Notas</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @endauth

        <div class="col-md-9 col-lg-10">
            <div class="row">
                <div class="col mt-4">
                    <!-- Contenido principal de la página -->
                    @yield('content')
                </div>
            </div>
        </div>

    </div>
</div>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
