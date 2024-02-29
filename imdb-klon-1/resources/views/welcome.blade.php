@section('titletab', 'Home')
<!-- html tag, name -->

<x-app-layout>
@if (Route::has('login'))
    <div class="sm:fixed sm:top-8 sm:right-4 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}" style="font-size: 15px; color: white !important; text-decoration: none !important;" class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" style="font-size: 15px; color: white !important; text-decoration: none !important; margin-left: 10px;" class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" style="font-size: 15px; color: white !important; text-decoration: none !important; margin-left: 10px; margin-right: 10px;" class="ml-4 font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif


   
<h1 class="h1-home" style="margin-left: 10px;">
    <i class="fa fa-film" aria-hidden="true"></i> Top Movies
    <!-- Link to the "Movies" page using the route helper -->
    <a href="{{ route('movies.index') }}" class="btn btn-primary" style="margin-left: 10px;">Go to Movies</a>
</h1>
<p class="p-home" style="margin-left: 10px;">Explore and learn more about the most recent and exciting movies</p>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">

                    <img src="https://m.media-amazon.com/images/S/pv-target-images/af5f3bfd605bcf60c762eee7cc2f94d6bd3c1514573440c4cd28126c662e3820._UR1920,1080_BR-6_SX720_FMpng_.png"
                        alt="Up Graded" class="imgMovie" style="width:100%; ">
                </div>

                <div class="item">
                    <img src="https://m.media-amazon.com/images/S/pv-target-images/c9a768bbc37d687ae0a7b654823149a383f881c9b2f11ef26a653f5932e5902f._UR1920,1080_BR-6_SX720_FMjpg_.jpg"
                        alt="Before I Fall" class="imgMovie" style="width:100%; ">
                </div>

                <div class="item">
                    <img src="https://m.media-amazon.com/images/S/pv-target-images/9e90d3e659f8afecc25a3805bb4bbcb1ade262ce2f4553b4790181ed75305e09._UR1920,1080_BR-6_SX720_FMjpg_.jpg"
                        alt="The Burge" class="imgMovie" style="width:100%;">
                </div>

                <div class="item">
                    <img src="https://m.media-amazon.com/images/S/pv-target-images/1b2cb0767387e87857d7a78684502fcda060fde0fbe22d702c9a3c29925106d3._UR1920,1080_BR-6_SX720_FMjpg_.jpg"
                        alt="Invetation" class="imgMovie" style="width:100%; ">
                </div>

                <div class="item">
                    <img src="https://m.media-amazon.com/images/S/pv-target-images/ed15ec716998dcba6bb9bc04d00507d9949cfd17bea35497e6282827c5a0b3e0._UR1920,1080_BR-6_SX720_FMjpg_.jpg"
                        alt="Mid Sommar" class="imgMovie" style="width:100%;">
                </div>
            </div>

        </div>

        <h2 class="h1-home" style="margin-left: 10px;"><i class="fa fa-film" aria-hidden="true"></i> Latest movies and trailers</h2>

        <div class="card-group">
        <div class="card mb-3 d-flex flex-column">
    @foreach($movies as $movie)
        @if($movie->title == 'Wonka')
            <a href="{{ route('movies.show', $movie->id) }}">
                <img class="card-img-top" src="{{ $movie->img_path }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">{{ $movie->title }}</h3>
                    <p class="card-text">{{ $movie->release_date }} | {{ $movie->duration }} | {{ $movie->genre }}</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i> {{ $movie->top_rating }}</p>
                    <p class="card-text"><small class="text">{{ $movie->description }}</small></p>
                </div>
            </a>
        @endif
    @endforeach
    <a class="btn btn-primary mt-auto" href="https://www.youtube.com/watch?v=otNh9bTjXWg" role="button">
        <i class="fa fa-play" aria-hidden="true"></i> Trailer
    </a>
</div>

        
<div class="card mb-3 d-flex flex-column">
    @foreach($movies as $movie)
        @if($movie->title == 'The Hunger Games')
            <a href="{{ route('movies.show', $movie->id) }}">
                <img class="card-img-top" src="{{ $movie->img_path }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">{{ $movie->title }}</h3>
                    <p class="card-text">{{ $movie->release_date }} | {{ $movie->duration }} | {{ $movie->genre }}</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i> {{ $movie->top_rating }}</p>
                    <p class="card-text"><small class="text">{{ $movie->description }}</small></p>
                </div>
            </a>
        @endif
    @endforeach
    <a class="btn btn-primary mt-auto" href="https://www.youtube.com/watch?v=RDE6Uz73A7g" role="button"><i class="fa fa-play" aria-hidden="true"></i>Trailer</a>
</div>


            <div class="card mb-3 d-flex flex-column">
            @foreach($movies as $movie)
        @if($movie->title == 'Aquaman')
            <a href="{{ route('movies.show', $movie->id) }}">
                <img class="card-img-top" src="{{ $movie->img_path }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">{{ $movie->title }}</h3>
                    <p class="card-text">{{ $movie->release_date }} | {{ $movie->duration }} | {{ $movie->genre }}</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i> {{ $movie->top_rating }}</p>
                    <p class="card-text"><small class="text">{{ $movie->description }}</small></p>
                </div>
            </a>
        @endif
    @endforeach
                <a class="btn btn-primary mt-auto" href="https://www.youtube.com/watch?v=aD3v7gPZ2Lw" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>
            <div class="card mb-3 d-flex flex-column">
            @foreach($movies as $movie)
        @if($movie->title == 'Barbie')
            <a href="{{ route('movies.show', $movie->id) }}">
                <img class="card-img-top" src="{{ $movie->img_path }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">{{ $movie->title }}</h3>
                    <p class="card-text">{{ $movie->release_date }} | {{ $movie->duration }} | {{ $movie->genre }}</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i> {{ $movie->top_rating }}</p>
                    <p class="card-text"><small class="text">{{ $movie->description }}</small></p>
                </div>
            </a>
        @endif
    @endforeach
                <a class="btn btn-primary mt-auto" href="https://www.youtube.com/watch?v=pBk4NYhWNMM" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>

            @forelse($movies as $movie)
    @if($movie->title == 'One Life')
        <div class="card mb-3 d-flex flex-column">
            <a href="{{ route('movies.show', $movie->id) }}">
                <img class="card-img-top" src="{{ $movie->img_path }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">{{ $movie->title }}</h3>
                    <p class="card-text">{{ $movie->release_date }} | {{ $movie->duration }} | {{ $movie->genre }}</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i> {{ $movie->top_rating }}</p>
                    <p class="card-text"><small class="text">{{ $movie->description }}</small></p>
                </div>
            </a>
            <a class="btn btn-primary mt-auto" href="{{ $movie->trailer_path }}" role="button"><i class="fa fa-play" aria-hidden="true"></i>Trailer</a>
        </div>
    @endif
@empty
    <p>No movie found with the title 'One Life'</p>
@endforelse

        </div>
        <h2 class="h1-home" style="margin-left: 10px;"><i class="fa fa-film" aria-hidden="true"></i> Upcoming Movies</h2>

        <div class="wrapper">
            <div class="owlcarousel owl-carousel">
                <div class="card card-1">
                    <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/iiid1xMhoAcW83VJ9LdAqf4Vtbr.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-2">
                    <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/8b8R8l88Qje9dn9OE8PY05Nxl1X.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-3">
                    <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/yG8QKnaiz7JoIMh3oxdm0JJN6IG.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-4">
                    <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/UZ0ydgbXtnrq8xZCI5lHVXVcH9.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-5">
                    <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/k6iHs4daxm0RQqFQsE8oE5wWJjj.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-5">
                    <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/uQkiDKQyun13mqsOXv7I5MRKr0q.jpg"
                        alt="Card image cap">
                </div>
                <div class="card card-5">
                    <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/46sp1Z9b2PPTgCMyA87g9aTLUXi.jpg"
                        alt="Card image cap">
                </div>
                
            </div>
        </div>

      <script>
          $(".owlcarousel").owlCarousel({
              margin: 20,
              loop: true,
              autoplay: true,
              autoplayTimeout: 2000,
              autoplayHoverPause: true,
              responsive: {
                  0: {
                      items: 1,
                      nav: false
                  },
                  600: {
                      items: 2,
                      nav: false
                  },
                  1000: {
                      items: 3,
                      nav: false
                  }
              }
          });
      </script>

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="main.js"></script>      
</x-app-layout>