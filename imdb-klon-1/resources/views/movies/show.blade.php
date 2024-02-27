@extends('layouts.app')

{{-- @section('titletab', '$movie_id') <!-- html tag, name --> --}}
@section('titletab', 'Movies ' . $movie->title) <!-- html tag, name -->

@section('content')
    <div class="container card pt-2 p-3" >
        <div class="row text-center mt-3 d-flex justify-content-center align-items-center">
            <div class="col-sm">
                <h1 class="">{{ $movie->title }}</h1>
                <ul class="list-group list-group-horizontal d-flex justify-content-center align-items-center">
                    <li class="list-group-item text-primary">{{ $movie->release_date }}</li>
                   
                    <li class="list-group-item text-primary">{{ $movie->duration }}</li>
                </ul>  
            </div>
            <div class="mt-3 col ">
                <div>
                    <p>Group2 Rating</p>
                </div>
                <i class="fa-solid fa-star" style="color:#F5C518"></i>
                <span>{{ $movie->top_rating }}</span>
            </div>
        </div>
        <div class="row text-center mt-3">
            <div class="col-md my-auto">
                <img class="img-fluid" style="width: 350px" src="{{ $movie->img_path }}" alt="">
            </div>
            <div class="col-md mt-3">
            <iframe width="100%" height="315" src="{{ $movie->trailer_path }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm">
                <ul class="list-group list-group-horizontal d-flex justify-content-center align-items-center">
                    <li class="list-group-item text-primary">{{ $movie->genre }}</li>
                </ul> 
            <div class="mt-4">
                <p>
                    {{ $movie->description }}
                </p>
            </div> 
            <hr>
            <div class="mt-4 d-flex align-items-center">
                <strong class="me-3">Directors</strong>
                <ul class="list-group list-group-horizontal ">
                    <li class="list-group-item text-primary">{{ $movie->director }}</li>
                </ul> 
                </div>
                <hr>
                <div class="mt-4 d-flex align-items-center">
                <strong class="me-3">Actors</strong>
                <ul class="list-group list-group-horizontal ">
                    <li class="list-group-item text-primary">{{ $movie->actors }}</li>
                </ul> 
                </div>
            </div>

            <div class="col-sm">
            @auth
                <div> {{--Button Add to watchlist--}}
                    <a class="btn btn-primary" href="{{ route('addToWatchlist', ['movieid'=>$movie->id]) }}">
                        Add to watchlist
                    </a>
                </div>
            @endauth
        </div>

    </div>

        <div class="row mt-3">
            <h3>Reviews</h3>
            @auth           
            <form action="{{ route('movies.reviews.store', $movie->id) }}" method="POST">
                @csrf
                <input type="text" name="title" class="form-control" style="width: 200px" placeholder="Review heading">
                <input type="number" name="rating" class="form-control mt-4" style="width: 70px" placeholder="Rating">
                <textarea type="text" name="content" class="form-control mt-4" rows="10" placeholder="Review content"></textarea>
                <button type="submit" class="btn btn-primary mt-3">Post Review</button>
            </form> 
            @endauth
        </div> --}}

        @if (count($movie->reviews))
            @foreach ($movie->reviews as $review)
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11">          
                            <h5 class="card-title text-primary">{{ $review->title }}</h5>                         
                            <p class="float-left"> {{ $review->user->username }} | <strong> {{ $review-> top_rating }} <i class="fa fa-star" style="color: yellow"></i> </strong> </i></p>                         
                            <div class="clearfix"></div>
                            <p>{{ $review->content }}</p>
                        </div>

                        @auth                            
                        <div class="col-md-1 d-flex align-items-center">
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                                </div>
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
@endsection






