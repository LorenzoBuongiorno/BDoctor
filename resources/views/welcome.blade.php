<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDoctor</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
                @import '/sass/_variables.scss';

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                padding-top: 5px
                
            }

            .top-right a{
                transition: .5s;
            }
            .top-right a:hover{
                transition: .5s;
                color: #ff6700;
                font-size: 15px
            }
            .content {
                display: inline-block;
            }

            .title {
                font-size: 84px;
                display: block;
            }
            
            .slogan{
                font-size: 20px
            }

            .navbar{
                width: 100%;
                background-color: #3a6ea5;
                height: 80px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .main-page{
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .links > a {
                color: whitesmoke;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .title{
                transition: .5s;
                cursor: pointer;
                text-decoration: none;
                color: #636B6F;
            }
            .title:hover{
                font-size: 100px;
                transition: .5s;
                
            }



        </style>
    </head>
    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="android-chrome-512x512" sizes="512x512" href="img/android-chrome-512x512.png">
        <link rel="android-chrome-192x192" sizes="192x192" href="img/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
    <body>
        <div class=" flex-center position-ref">
            @if (Route::has('login'))
            <div class="navbar ">
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}"><i class="fa-solid fa-user">Home</a>
                    @else
                        
                        <a href="{{ route('login') }}"></i>Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrati</a>
                        @endif
                    @endauth
                </div>
            </div>

            @endif
        </div>
        
        <div class="main-page">
            <div class="flex-center">
                <div class="content title">
                    <a href="{{ url('/home') }}" class="title m-b-md">
                        BDoctor
                    </a>
                </div>
            </div>
            <div class="flex-center slogan">
                Ricerca i tuoi medici con un click
            </div>
        </div>


    </body>
</html>
