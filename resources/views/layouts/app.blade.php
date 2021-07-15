<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Call Center Stats</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<link rel="shortcut icon" type="image/jpg" href="{{asset('img/polymer_white_24dp.svg')}}"/>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm navbar fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                <!--app name-->
                <b><img class="mr-2" src="{{asset('img/polymer_white_24dp.svg')}}" alt="">Call Center Stats</b> 
                </a>
                <a class ="btn btn-info" href="{{route('gestion.index')}}"><img src="{{asset('img/accessibility_white_24dp.svg')}}" alt=""> Personal</a>
                <a class ="btn btn-info ml-3" href="{{route('gestion.productividad')}}"><img src="{{asset('img/timeline_white_24dp.svg')}}" alt=""> Productividad</a>
                <a class ="btn btn-info ml-3" href="{{route('gestion.abandono')}}"><img src="{{asset('img/timeline_white_24dp.svg')}}" alt=""> Atencion</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('gestion.create')}}">Agregar personal</a>
                                
                              
                                <a class="dropdown-item" href="{{route('gestion.formEvento')}}">Asentar feriado completo</a>
                                <a class="dropdown-item" href="{{route('gestion.vistaHorarios')}}">Vista general de horarios</a>
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        <div class="container">
            <div class="row">
                @yield('botones')
                <main class="py-4 mt-5 col-12">
                    @yield('content')
                </main>
            </div>
        </div>
       
    </div>
   
</body>

 

</html>
