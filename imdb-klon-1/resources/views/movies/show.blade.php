@section('titletab', 'Movies ' . $movie->title)

<x-app-layout>
    <div class="container card pt-6 pb-8 px-4 md:px-6">
        <div class="row text-center mt-3 justify-content-center items-center">
            <div class="col-sm text-white">
                <h1 class="text-4xl font-bold">{{ $movie->title }}</h1>
                <ul class="list-inline text-white mt-2">
                    <li class="list-group-item text-white">{{ $movie->release_date }}</li>
                    <li class="list-group-item text-white">{{ $movie->duration }}</li>
                </ul>
            </div>
            <div class="flex justify-center items-center mt-8">
        <div class="text-center">
            <p class="text-lg text-white">Group2 Rating</p>
            <div class="flex items-center justify-center">
                <i class="fa-solid fa-star text-yellow-500 text-lg text-white"></i>
                <span class="text-lg text-white ml-1">{{ $movie->top_rating }}</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
        <div class="flex justify-center items-center">
            <img class="img-fluid rounded-md" style="width: 350px;" src="{{ $movie->img_path }}" alt="Movie Poster">
        </div>
        <div class="text-center">
            @php
            $videoId = substr($movie->trailer_path, strpos($movie->trailer_path, 'v=') + 2);
            @endphp
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $videoId }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm px-4">
        <ul class="list-group list-group-horizontal flex justify-content-center items-center">
            <li class="list-group-item text-white">{{ $movie->genre }}</li>
        </ul>
        <div class="mt-4 text-white">
            <p>
                {{ $movie->description }}
            </p>
        </div>
        <hr class="my-4 text-white">
        <div class="mt-4 flex items-center text-white">
            <strong class="me-3 text-white">Directors</strong>
            <ul class="list-group list-group-horizontal text-white">
                @foreach(['Carlson Young'] as $director)
                <li class="list-group-item text-primary text-white">{{ $director }}</li>
                @endforeach
            </ul>
        </div>
        <hr class="my-4 text-white">
        <div class="mt-4 flex items-center text-white">
            <strong class="me-3 text-white">Actors</strong>
            <ul class="list-group list-group-horizontal text-white">
                @foreach(['Camila Mendes', 'Archie Renaux', 'Marisa Tomei'] as $actor)
                <li class="list-group-item text-white">{{ $actor }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>

              
            <div class="col-sm text-white mt-4">
                @auth
                <x-primary-button class="ms-3 bg-red-950 hover:bg-orange-500 text-white">
                    {{ __('Add To Watchlist') }}
                </x-primary-button>
                @endauth
            </div>
        </div>
        @auth
        <div class="row mt-3 text-white">
            <h3 class="text-2xl text-white">Reviews</h3>
            <form action="{{ route('reviews.store') }}" method="POST" class="mt-3 text-white">
                @csrf
                <input type="number" name="rating" class="form-control mt-4 w-20 text-white" placeholder="Rating" min="1" max="10" required>
                <input type="hidden" id="movie_id" name="movie_id" value="{{ $movie->id }}">
                <label for="comment" class="mt-4 text-white">Comment:</label>
                <textarea name="comment" id="comment" class="form-control mt-2" rows="5" placeholder="Review content" required></textarea>
                <x-primary-button type="submit" class="mt-3 dark:bg-red-950 hover:bg-orange-500 text-white">Post Review</x-primary-button>
            </form>
        </div>
        @endauth
        @if (count($movie->reviews))
        @foreach ($movie->reviews->sortByDesc('created_at') as $review)
        <div class="card mt-3 text-white">
            <div class="card-body">
                <div class="flex flex-col text-white">
                    <div class="mb-3">
                        <h5 class="card-title text-white">{{ $review->title }}</h5>
                        <p>{{ $review->user->username }} | <strong>{{ $review->rating }} <i class="fa fa-star text-yellow-500 text-white"></i></strong></p>
                    </div>
                    <div class="mb-3 text-white">
                        <p>{{ $review->comment }}</p>
                    </div>
                    @auth
                    <div class="flex items-end justify-between">
                        <form action="{{ route('reviews.update', $review->id) }}" method="POST" class="me-3 w-1/2">
                            @csrf
                            @method('PUT')
                            <label for="rating">Rating:</label>
                            <input type="number" name="rating" id="rating" min="1" max="10" value="{{ $review->rating }}" class="form-control w-20">
                            <label for="comment" class="mt-2">Comment:</label>
                            <textarea name="comment" id="comment" class="form-control mt-2 text-white">{{ $review->comment }}</textarea>
                            <x-primary-button type="submit" class="mt-3 dark:bg-red-950 hover:bg-orange-500 text-white">
                                {{ __('Update Review') }}
                            </x-primary-button>
                        </form>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="w-1/2">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h6 class="mt-4">No reviews in this movie!</h6>
        @endif
    </div>
</x-app-layout>


