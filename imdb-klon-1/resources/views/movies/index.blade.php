@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4 bg-gradient-to-b from-red-950 to-zinc-950">
    @foreach($movies as $movie)
    <div class="relative bg-stone-950 border border-amber-300 dark:border-orange-600 p-4 mb-4">
        <!-- Blurred Background Poster -->
        <div class="absolute inset-0 bg-cover bg-center filter blur-md" style="background-image: url('{{ $movie->img_path }}');"></div>

        <!-- Sharp Focused Poster -->
        <div class="relative z-10 max-w-full h-[250px] mx-auto">
            <img src="{{ $movie->img_path }}" alt="{{ $movie->title }}" class="w-full h-full object-contain rounded-lg shadow-md max-w-full h-[250px] mx-auto">
        </div>

        <!-- Movie Information -->
        <div class="text-white mt-4 relative z-9999">
            <p class="text-lg font-bold mb-2">{{ $movie->title }}</p>
            <p class="text-sm">{{ $movie->description }}</p>
            <p class="text-xs">Release Date: {{ $movie->release_date }}</p>
            <p class="mt-2 text-xs">Top Rating: {{ $movie->top_rating }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection