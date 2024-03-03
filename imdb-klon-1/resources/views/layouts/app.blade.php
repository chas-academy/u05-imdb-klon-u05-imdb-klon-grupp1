<!DOCTYPE html>
<?php
/**
 * 
 */
?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')

    <script src="{{ URL::asset('js/app.js') }}" type="module" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b21a636a7a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

</head>

<body class="d-flex flex-column min-vh-100 bg-gradient-to-b from-zinc-950 to-red-950 text-white">


    <main class="flex-grow flex flex-col items-center justify-center relative">

        <!--go back btn-->
        <a href="{{ route('navigate.back') }}" class="absolute top-0 left-0 text-white no-underline hover:text-amber-500 inline-flex items-center bg-opacity-10 p-1 mb-2 ml-2 mt-2">
            <i class="fas fa-arrow-left text-xl mr-1"></i>
            <span class="text-xs">Go Back</span>
        </a>
        <div class="flex items-center mb-4">
            <div class="text-4xl font-bold text-amber-300 dark:text-white">
                ReelCorn
            </div>
            <a href="/" class="ml-2 mr-2">
                <x-application-logo class="w-10 h-10 fill-current text-red-700" />
            </a>
            <div class="text-4xl font-bold text-amber-500 dark:text-white">
                DataBase
            </div>
        </div>

        {{ $slot }}

    </main>

    @include('layouts.partials.footer')
</body>

</html>