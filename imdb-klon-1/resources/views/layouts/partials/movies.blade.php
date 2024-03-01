<div class="movies-container">
    <h2>Movies in {{ $genre->name }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @forelse ($movies as $movie)
            <div class="movie-card">
                <img src="{{ $movie->img_path }}" alt="{{ $movie->title }}">
                <div class="movie-info">
                    <h3>{{ $movie->title }}</h3>
                    <p>{{ $movie->description }}</p>
                    <span class="rating">{{ $movie->top_rating }}</span>
                </div>
            </div>
        @empty
            <p>No movies found for this genre.</p>
        @endforelse
    </div>
</div>
