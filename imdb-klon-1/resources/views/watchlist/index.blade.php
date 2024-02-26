@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Watchlist</h1>

    <div class="row">
        @foreach($watchlistMovies as $movie)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ $movie->moviePoster() }}" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            <!-- Add a route or form for removing from watchlist -->
                        </div>
                        <small class="text-muted">{{ $movie->release_date }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection