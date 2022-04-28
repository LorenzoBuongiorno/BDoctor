<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BDoctor.it | Area riservata</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

         <!-- Fonts -->
         <link rel="dns-prefetch" href="//fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
        {{-- Favicon --}}
        {{-- <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png"> --}}
        {{-- <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png"> --}}
        {{-- <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png"> --}}
        <link rel="android-chrome-512x512" sizes="512x512" href="img/android-chrome-512x512.png">
        <link rel="android-chrome-192x192" sizes="192x192" href="img/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        {{-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script> --}}
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

    <body>
        {{-- admin navbar --}}
        @include('partials.navbar')

        {{-- admin content --}}
        <main>
            @yield('content')
        </main>

    </body>
</html>
