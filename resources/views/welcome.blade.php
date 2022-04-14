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
                font-size: 15px;
                text-decoration: none;
            }
            .content {
                display: inline-block;
            }

            .title {
                font-size: 84px;
                display: block;
                text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            }
            
            .slogan{
                margin-top: 30px;
                font-size: 20px;
                color: whitesmoke;
                text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;

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
                margin-bottom: 20px;
            }
            .title:hover{
                font-size: 100px;
                transition: .5s;
                text-decoration: none;
                color: whitesmoke;
            }

            .jumbotron{
                background-image: url('{{ asset('img/jumbo.jpg') }}');
                filter: blur(8px);
                -webkit-filter: blur(8px);
                width: 100%;
                height: 100%;
                background-size: cover;
            }

            .main-page{
                color: white;
                font-weight: bold;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 80%;
                padding: 20px;
                text-align: center;
            }
            .main-page a{
                color: whitesmoke
            }
            /* .search {
                background-color: #fff;
                padding: 4px;
                border-radius: 5px
            }

            .search-1 {

            }

            .search-1 input {
                height: 45px;
                border: none;
                width: 100%;
                padding-left: 34px;
                padding-right: 10px;
                border-right: 2px solid #eee;
                width: 1000px;
                background-color:greenyellow;
            }

            .search-1 input:focus {
                border-color: none;
                box-shadow: none;
                outline: none
            }

            .search-1 i {
                position: absolute;
                top: 12px;
                font-size: 24px;
                color: #eee
            }

            ::placeholder {
                color: #c0c0c0;
                opacity: 1
            }

            .search-2 {
                position: relative;
                text-align: center
                width: 100%;
            }

            .search-2 input {
                height: 45px;
                border: none;
                width: 930px;
                padding-left: 18px;
                padding-right: 100px;
                background-color: greenyellow;
            }

            .search-2 input:focus {
                border-color: none;
                box-shadow: none;
                outline: none
            }

            .search-2 i {
                position: absolute;
                top: 12px;
                left: -10px;
                font-size: 24px;
                color: #eee
            }

            .search-2 button {
                position: absolute;
                right: 1px;
                top: 0px;
                border: none;
                height: 45px;
                background-color: #ff6700;
                color: #fff;
                width: 90px;
                border-radius: 4px;
                cursor: pointer;
                transition: .5s;
                
            }

            .search-2 button:hover{
                transition: .5s;
                background-color: #a54a0e;
            }  */

            .content img{
                width: 100px
            }

            .searchbar{
                background-color: rgba(0, 0, 0, 0.253);
                margin-top: 30px;
                border-radius: 20px;
                padding-bottom: 10px;
            }

            .form-inline{
               display: flex;
                justify-content: center;
                margin-top: 20px;
                justify-content: space-around            
            }

            .srcbtn{
                transition: .5s;
            }

            .advbtn:hover{
                text-decoration: none
            }

            a.btn-warning {
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;

            width: 200px;
            height: 50px;
            border-radius: 5px;
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
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>        
        <div class="jumbotron">

        </div>

            <div class="main-page">
                <div class="flex-center">
                    <div class="content title">
                        <a href="{{ route('home') }}" class="title m-b-md">
                            {{-- <img src="img/icon.png" alt=""> --}}
                            BDoctor
                        </a>
                    </div>
                </div>

                <div class="container searchbar">
                    <div class="row">
                        <div class="span12">
                            <form method="get" action="/" class="form-inline" >
                                <input name="q" class="span5" type="text"  placeholder="Cardiologo" >
                                <input name="loc" class="span5" type="text"  placeholder="Roma">
                                <button type="submit" class="srcbtn btn btn-primary"> <i class="icon-search icon-white"></i> Cerca</button>
                            </form>
                        </div>
                        <a href="{{ url('/') }}" type="submit" class="btn-warning"><i class="icon-search icon-white"></i>  Ricerca Avanzata</a>

                    </div>
                </div>


                <div class="flex-center slogan">
                    Ricerca i tuoi medici con un click
                </div>
            </div>



            {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/jumbo.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/jumbo2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/jumbo3.jpg" alt="Third slide">
                  </div>
                </div>
              </div> --}}
    </body>
</html>
