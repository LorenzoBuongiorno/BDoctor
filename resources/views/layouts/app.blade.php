<!doctype html>
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">




    {{-- icon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="android-chrome-512x512" sizes="512x512" href="img/android-chrome-512x512.png">
    <link rel="android-chrome-192x192" sizes="192x192" href="img/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


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
                            <li>
                                <a href="{{route('doctors.edit')}}">edit</a>
                            </li>
                        @else
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


</head>
<body>
    <div class="jumbotron bg_image" id="app">
        <div class=" flex-center position-ref">
            @if (Route::has('login'))
            <div class="navbar ">
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/edit') }}">Modifica Il tuo profilo</a>
                    <a href="{{ url('/messages') }}">Messaggi</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrati</a>
                        @endif
                    @endauth
                </div>
                <div class="top-left links">
                    <a href="{{ url('/') }}">Pagina Iniziale</a>
                </div>
            </div>

            @endif
        </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
