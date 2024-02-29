<!DOCTYPE html>
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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100 bg-gradient-to-b from-zinc-950 to-red-950">
    @include('layouts.partials.header')

    @if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif
    
    <main class="flex-grow flex flex-col items-center justify-center relative">
        <a href="{{ url()->previous() }}" class="absolute top-0 left-0 text-white no-underline hover:text-gray-300 inline-flex items-center bg-opacity-40 bg-red-400 bg-opacity-10 p-2 rounded-md border border-white border-opacity-50 mb-4 ml-4 mt-4">
            <i class="fas fa-arrow-left mr-2"></i>
            <span>Go Back</span>
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