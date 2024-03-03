@section('titletab', 'Home')
<x-app-layout>
  @if (Route::has('login'))
  <div class=" sm:top-8 sm:right-4 p-3 text-right z-10">
    @auth
    @if(auth()->user()->isAdmin())
    <a href="{{ url('/dashboard') }}" class="font-semibold text-white bg-red-950 hover:bg-amber-600 px-2 py-1 rounded text-xs">
      Dashboard
    </a>
    @else
    <a href="{{ url('/profile') }}" class="font-semibold text-white bg-red-950 hover:bg-orange-600 px-2 py-1 rounded text-xs">
      Profile
    </a>
    @endif
    @else
    <a href="{{ route('login') }}" class="font-semibold text-white bg-red-950 hover:bg-amber-600 px-2 py-1 rounded ml-2 text-xs">
      Log in
    </a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="font-semibold text-white bg-red-950 hover:bg-amber-600 px-2 py-1 rounded ml-2 text-xs">
      Register
    </a>
    @endif
    @endauth
  </div>
  @endif


  <h2 class="mb-4"></h2>


  <!-- Image slideshow with 4-second timer -->
  <div class="slideshow-container max-w-full mx-auto relative">
    <!-- Image 1 -->
    <a href="{{ route('movies.show', ['movie' => 1]) }}">
      <img src="https://m.media-amazon.com/images/S/pv-target-images/7fb8d653e0f83411437d9ba7e25ec1aa2ca6f21873f6af70274297eb94e0f47f._UR1920,1080_BR-6_SX720_FMjpg_.jpg" alt="The Voyeurs" class="mySlides fade">
    </a>

    <!-- Image 2 -->
    <a href="{{ route('movies.show', ['movie' => 2]) }}">
      <img src="https://m.media-amazon.com/images/S/pv-target-images/81cd0205ad75a9884996b20fa2b82701cd532144ec23b688973f0998344080af._UR1920,1080_SX720_FMjpg_.jpg" alt="Goodnight Mommy" class="mySlides fade">
    </a>

    <!-- Image 3 -->
    <a href="{{ route('movies.show', ['movie' => 3]) }}">
      <img src="https://m.media-amazon.com/images/S/pv-target-images/9e90d3e659f8afecc25a3805bb4bbcb1ade262ce2f4553b4790181ed75305e09._UR1920,1080_BR-6_SX720_FMjpg_.jpg" alt="The Purge" class="mySlides fade">
    </a>

    <!-- Image 4 -->
    <a href="{{ route('movies.show', ['movie' => 4]) }}">
      <img src="https://m.media-amazon.com/images/S/pv-target-images/1b2cb0767387e87857d7a78684502fcda060fde0fbe22d702c9a3c29925106d3._UR1920,1080_BR-6_SX720_FMjpg_.jpg" alt="Invitation" class="mySlides fade">
    </a>

    <!-- Image 5 -->
    <a href="{{ route('movies.show', ['movie' => 5]) }}">
      <img src="https://m.media-amazon.com/images/S/pv-target-images/ed15ec716998dcba6bb9bc04d00507d9949cfd17bea35497e6282827c5a0b3e0._UR1920,1080_BR-6_SX720_FMjpg_.jpg" alt="Midsummer" class="mySlides fade">
    </a>
  </div>



  <!--all movies btn-->
  <h3 class="h1-home mb-4 mt-4" style="margin-left: 10px; ">
    <a href="{{ route('movies.index') }}" class="inline-flex items-center px-16 py-8 bg-amber-500 hover:bg-amber-600 text-white text-base font-medium rounded-md mt-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">All Movies</a>
  </h3>


  <div class="watchlistCarousel">
    @auth
    @php
    $user = Auth::user();
    @endphp
    @if($user)
    @include('layouts.partials.watchlistCarousel')
    @else
    <h3>No movies in your watchlist</h3>
    @endif
    @endauth
  </div>
  <h2 class="mt-3"> Newly Released </h2>
  <div class="overflow-hidden">
    <div class="flex space-x-4 overflow-x-auto" style="width: calc(100vw + 1px);">
      @foreach ($movies->sortByDesc('release_date')->take(8) as $movie)
      <div class="flex-none w-64 bg-black bg-opacity-80 p-4 rounded-md mt-2">
        <a href="{{ route('movies.show', $movie) }}" class="text-decoration-none">
          <img src="{{ asset($movie->img_path) }}" class="w-full h-auto mb-4" />
          <h2 class="text-white text-xl font-semibold mb-2">{{ $movie->title }}</h2>
          <p class="text-gray-500">{{ $movie->release_date }}</p>
          <div class="mt-4 flex justify-between">
            <p class="text-gray-300 text-sm">
              PG-13 | {{ $movie->top_rating }} <i class="text-warning fa fa-star"></i> {{ $movie->genre }}
            </p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>



  <div class="genreCarousel">
    @include('layouts.partials.genreCarousel')
  </div>

  <!--  <div class="allMovies">
    @include('layouts.partials.allMovies')
  </div> -->



  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].classList.add('hidden');
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      slides[slideIndex - 1].classList.remove('hidden');
      setTimeout(showSlides, 4000); // Change image every 4 seconds
    }
  </script>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script type="text/javascript" src="main.js"></script>

</x-app-layout>