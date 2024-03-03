<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen h-screen flex flex-col justify-center items-center bg-gradient-to-b from-zinc-950 to-red-950 text-white">
    <div class="flex items-center mb-6">
        <div class="text-4xl font-bold text-amber-300 dark:text-white">
            ReelCorn
        </div>
        <a href="/" class="ml-2 mr-2 mt-2">
            <x-application-logo class="w-10 h-10 fill-current" />
        </a>
        <div class="text-4xl font-bold text-amber-500 dark:text-white">
            DataBase
        </div>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gradient-to-b from-amber-500 to-amber-400 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</body>

</html>