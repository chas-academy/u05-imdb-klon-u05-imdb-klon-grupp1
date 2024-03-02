@section('titletab', 'Home')
<x-app-layout>
  @if (Route::has('login'))
    <div class="sm:fixed sm:top-8 sm:right-4 p-6 text-right z-10">

      @auth
        <a href="{{ url('/profile') }}" class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white bg-blue-700 px-4 py-2 rounded">Dashboard</a>
      @else
        <a href="{{ route('login') }}" class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white bg-blue-700 px-4 py-2 rounded ml-4">Log in</a>


        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white bg-blue-700 px-4 py-2 rounded ml-4">Register</a>
        @endif
      @endauth
    </div>
  @endif

  <h2 class="mb-4"></h2>

  <h3 class="h1-home" style="margin-left: 10px;">
    <i class="fa fa-film" aria-hidden="true"></i> Top Movies
    <a href="{{ route('movies.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-700 text-white text-base font-medium rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">All Movies</a>
  </h3>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

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

  </div>

  <div class="genreCarousel">
    @include('layouts.partials.genreCarousel')
  </div>

  <div class="allMovies">
   @include('layouts.partials.allMovies')
  </div>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</x-app-layout>
