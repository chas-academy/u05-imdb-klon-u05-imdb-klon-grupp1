<div class="container p-3 text-center">
    <h1 class="mb-4">All Movies</h1>
</div>

<!--displaying all movies in grid-->
<div class="container sm mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
    @foreach ($movies as $movie)
    <a href="{{ route('movies.show', $movie) }}" class="text-decoration-none">
        <div class="bg-black bg-opacity-80 p-4 rounded-md h-full">
            <div class="aspect-w-2 aspect-h-3 mb-4">
                <img src="{{ asset($movie->img_path) }}" class="object-contain w-full h-full rounded-md" />
            </div>
            <h2 class="text-xl font-semibold mb-2 text-white">{{ $movie->title }}</h2>
            <p class="text-gray-500">{{ $movie->release_date }}</p>
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
</div>