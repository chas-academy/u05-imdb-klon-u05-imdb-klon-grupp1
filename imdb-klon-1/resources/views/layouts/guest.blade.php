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

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-red-950 dark:bg-red-950">
        <div class="flex items-center">
            <div class="text-4xl font-bold text-orange-600 dark:text-white">
                IMDB
            </div>
            <a href="/" class="ml-4 mr-4"> <!-- Adjust the ml and mr values as needed -->
                <x-application-logo class="w-20 h-20 fill-current text-red-700" />
            </a>
            <div class="text-4xl font-bold text-white dark:text-white">
                CLONE
            </div>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gradient-to-b from-amber-500 to-amber-400 dark:bg-red-950 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>

    </div>
</body>

</html>