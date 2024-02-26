@extends('layouts.app')

@section('content')
<div class="bg-gray-200 p-4 rounded-md">
    <img src="{{ asset($movie->moviePoster()) }}" alt="{{ $movie->title }}" class="w-full h-40 object-cover mb-4 rounded-md">
    <h2 class="text-lg font-semibold">{{ $movie->title }}</h2>
    <p class="text-gray-600">{{ $movie->description }}</p>
    <p class="text-gray-600">Release Date: {{ $movie->release_date }}</p>
    <p class="text-gray-600"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>{{ $movie->top_rating }}</p>
    <div class="mt-4">
        <h3 class="text-lg font-semibold mb-2">Trailer</h3>
        <video controls class="w-full" poster="{{ asset($movie->moviePoster()) }}">
            <source src="{{ asset($movie->trailer_path) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    @section('content')
    <div class="bg-gray-200 p-4 rounded-md">
        <img src="{{ asset($movie->moviePoster()) }}" alt="{{ $movie->title }}" class="w-full h-40 object-cover mb-4 rounded-md">
        <h2 class="text-lg font-semibold">{{ $movie->title }}</h2>
        <p class="text-gray-600">{{ $movie->description }}</p>
        <p class="text-gray-600">Release Date: {{ $movie->release_date }}</p>

        {{-- Button to add the movie to the watchlist --}}
        <form action="{{ route('watchlist.storeFromMovie', ['movie' => $movie->id]) }}" method="post">
            @csrf
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md mt-4">
                Add to Watchlist
            </button>
        </form>
    </div>
    @endsection