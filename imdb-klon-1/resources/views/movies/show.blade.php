@section('titletab', 'Movies ' . $movie->title)


<x-app-layout>
    <div class="container card pt-2 p-3">
        <div class="row mt-3 flex justify-content-center items-center">

            <img class="img-fluid" style="width: 200px" src="{{ $movie->img_path }}" alt="">




            <div class="flex flex-col items-start justify-start ml-4">

                <div class="flex items-center justify-start">
                    <i class="fa-solid fa-star text-yellow-500 text-lg"></i>
                    <span class="text-lg">{{ $movie->top_rating }}</span>
                </div>
                <p class="list-group-item text-primary">{{ $movie->genre }}</p>


                <div class="flex items-start justify-start space-x-2">
                    <span class="text-lg">{{ $movie->release_date }}</span>
                    <span class="text-lg">{{ $movie->duration }}</span>
                </div>
                <h1 class="text-4xl mt-2">{{ $movie->title }}</h1>
                <p>
                    {{ $movie->description }}
                </p>
            </div>
        </div>

        <div class="row mt-3">



            <hr class="my-4">
            <!--   <div class="mt-4 flex items-center">
                    <strong class="me-3">Directors</strong>
                    <ul class="list-group list-group-horizontal">
                        @foreach(['Carlson Young'] as $director)
                        <li class="list-group-item text-primary">{{ $director }}</li>
                        @endforeach
                    </ul>
                </div>
                <hr class="my-4">
                <div class="mt-4 flex items-center">
                    <strong class="me-3">Actors</strong>
                    <ul class="list-group list-group-horizontal">
                        @foreach(['Camila Mendes', 'Archie Renaux', 'Marisa Tomei'] as $actor)
                        <li class="list-group-item text-primary">{{ $actor }}</li>
                        @endforeach
                    </ul>
                </div> -->
        </div>
        <div class="col-sm">
            @auth
            <x-primary-button class="ms-3 bg-red-950 hover:bg-orange-500">
                {{ __('Add To Watchlist') }}
            </x-primary-button>
            @endauth
        </div>
        <div class="col-md mt-3 flex items-center justify-center">
            @php
            $videoId = substr($movie->trailer_path, strpos($movie->trailer_path, 'v=') + 2);
            @endphp
            <iframe class="w-screen" height="500" src="https://www.youtube.com/embed/{{ $videoId }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <h3 class="text-2xl mt-4g">Reviews</h3>
        @auth
        <div class="row mt-3">

            <form action="{{ route('reviews.store') }}" method="POST" class="mt-3">
                @csrf
                <input type="number" name="rating" class="form-control mt-4 w-20" placeholder="Rating" min="1" max="10" required>
                <input type="hidden" id="movie_id" name="movie_id" value="{{ $movie->id }}">
                <label for="comment" class="mt-4">Comment:</label>
                <textarea name="comment" id="comment" class="form-control mt-2" rows="5" placeholder="Review content" required></textarea>
                <x-primary-button type="submit" class="mt-3 dark:bg-red-950 hover:bg-orange-500">Post Review</x-primary-button>
            </form>
        </div>
        @endauth

        @if (count($movie->reviews))
        @foreach ($movie->reviews->sortByDesc('created_at') as $review)
        <div class="card mt-3 bg-white rounded p-4 text-black">
            <div class="card-body">
                <div class="flex flex-col">
                    <div class="mb-3">
                        <h5 class="card-title text-primary">{{ $review->title }}</h5>
                        <p>{{ $review->user->username }} | <strong>{{ $review->rating }} <i class="fa fa-star text-yellow-500"></i></strong></p>
                    </div>
                    <div class="mb-3">
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
                            <textarea name="comment" id="comment" class="form-control mt-2">{{ $review->comment }}</textarea>
                            <x-primary-button type="submit" class="mt-3 dark:bg-red-950 hover:bg-orange-500">
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
    </div>
</x-app-layout>