<div>
    @extends('layouts.app')

    @section('content')
    <div class="bg-gray-200 p-4 rounded-md">
        <img src="{{ asset($movie->moviePoster()) }}" alt="{{ $movie->title }}" class="w-full h-40 object-cover mb-4 rounded-md">
        <h2 class="text-lg font-semibold">{{ $movie->title }}</h2>
        <p class="text-gray-600">{{ $movie->description }}</p>
        <p class="text-gray-600">Release Date: {{ $movie->release_date }}</p>

    </div>
    @endsection
</div>