<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }} </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.default.min.css') }}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="py-3 navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Brayan Vilchez Daga</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="my-2 ml-auto navbar-nav my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre mi</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#certificates">Certificados</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @include('includes.header')
        @include('includes.about')
        @include('includes.services')
        @include('includes.portfolio')

        @include('includes.certificates')
        @include('includes.contact')
        @include('includes.footer')


    </body>
</html>
