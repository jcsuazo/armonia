<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="container-fluid px-0">
        <nav class="navbar navbar-expand-md ab_gray border-bottom py-0">
            <a href="{{ url('/') }}" class="ml-3">
                <img class="a_logo img-fluid" src="{{ asset('img/logo/logotype.png') }}" alt="armonia_logo">
            </a>
            <div class="container">
                <a class="navbar-brand a_small_size ml-5" href="{{ url('/') }}">
                    Búsqueda Avanzada
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link d-flex align-items-center" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <div class="d-flex flex-column align-items-center">
                                    <div>
                                        <i class="fas fa-cog at_ligth_gray a_icon_setting"></i>
                                        <span class="a_usuario">Myrtie Ruecker</span>

                                    </div>
                                    <span class="a_compania align-self-end">armonía</span>

                                </div>
                                <i class="fas fa-caret-down ml-3 a_arrow_down"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Salir del Sistema
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="row pt-0 px-0 mx-0">
            <section class="col-2 px-0">
                <aside class="nav flex-column ab_dark_gray a_aside">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item p-2" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </aside>
            </section>
            <section class="col-10 px-0">
                <section class="lower_section px-4">
                    <div class="a_noticia_1">
                        <span class="a_noticia">Noticias</span>
                        <button class="btn btn-lg">Agregar Noticia</button>
                    </div>
                    <div class="a_noticia_2">
                        {{\Carbon\Carbon::now()->format('l, d, F, Y')}}
                    </div>
                </section>
                @yield('content')
            </section>
        </main>
    </div>
</body>

</html>
