<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titletab')</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b21a636a7a.js" crossorigin="anonymous"></script>

</head>

<body class="d-flex flex-column min-vh-100">
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
</body>
</html>
