<?php

/**
 * Deleted all the Bootstrap links and replaced the styling on the elements still in the file.
 * Added a 'include' to include the watchlist carousel - not yet added.
 */
?>

@section('titletab', 'Home')
<x-app-layout>
  @if (Route::has('login'))
  <div class="sm:fixed sm:top-8 sm:right-4 p-3 text-right z-10">
    @auth
    <a href="{{ url('/profile') }}" class="font-semibold text-white bg-red-950 hover:bg-orange-400 px-2 py-1 rounded text-xs">
      Dashboard
    </a>
    @else
    <a href="{{ route('login') }}" class="font-semibold text-white bg-red-950 hover:bg-orange-400 px-2 py-1 rounded ml-2 text-xs">
      Log in
    </a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="font-semibold text-white bg-red-950 hover:bg-orange-400 px-2 py-1 rounded ml-2 text-xs">
      Register
    </a>
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
      @if(isset($movies))
      @include('layouts.partials.watchlistCarousel')
      @else
      <p>No movies in your watchlist</p>
      @endif

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</x-app-layout>