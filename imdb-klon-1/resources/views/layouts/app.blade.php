<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>@yield('titletab')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        @vite('resources/css/app.css')

        <script src="{{ URL::asset('js/app.js') }}" type="module" defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/b21a636a7a.js" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">    
           
        <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">


       

    </head>

<body class="d-flex flex-column min-vh-100">
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
</body>

</html>