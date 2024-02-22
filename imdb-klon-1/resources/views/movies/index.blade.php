<div>
    <!-- resources/views/movies/index.blade.php -->

    @extends('layouts.app') <!-- Assuming you have a layout file -->

    @section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($movies as $movie)
        <a href="{{ route('movies.show', $movie->id) }}">
            <div class="bg-gray-200 p-4 rounded-md">
                <img src="{{ asset($movie->moviePoster()) }}" alt="{{ $movie->title }}" class="w-full h-40 object-cover mb-4 rounded-md">
                <h2 class="text-lg font-semibold">{{ $movie->title }}</h2>
            </div>
        </a>
        @endforeach
    </div>
    @endsection
</div>