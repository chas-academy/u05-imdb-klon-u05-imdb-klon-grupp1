<x-app-layout>

    <div class="container p-3 text-center">
        <h1 class="mb-4">All Movies</h1>
    </div>

    <div class="container sm mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
        @foreach ($movies as $movie)
        <a href="{{ route('movies.show', $movie) }}" class="text-decoration-none">
            <div class="bg-white dark:bg-gray-800 p-4 rounded-md">
                <img src="{{ asset($movie->img_path) }}" class="w-full h-auto mb-4" />
                <h2 class="text-xl font-semibold mb-2">{{ $movie->title }}</h2>
                <p class="text-gray-500">{{ $movie->release_date }}</p>
                <p class="text-gray-700 mt-2">{{ $movie->description }}</p>
                <div class="mt-4 flex justify-between">
                    <p class="text-gray-700">
                        PG-13 | {{ $movie->top_rating }} <i class="text-warning fa fa-star"></i> {{ $movie->genre }}
                    </p>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <div class="d-flex justify-content-center text-white">
        {{-- Pagination --}}
        {{ $movies->links() }}
    </div>

</x-app-layout>