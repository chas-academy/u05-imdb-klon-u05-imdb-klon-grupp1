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
      <img src="https://m.media-amazon.com/images/S/pv-target-images/af5f3bfd605bcf60c762eee7cc2f94d6bd3c1514573440c4cd28126c662e3820._UR1920,1080_BR-6_SX720_FMpng_.png" alt="Upgraded" class="mySlides fade">
    </a>

    <!-- Image 2 -->
    <a href="{{ route('movies.show', ['movie' => 2]) }}">
      <img src="https://m.media-amazon.com/images/S/pv-target-images/c9a768bbc37d687ae0a7b654823149a383f881c9b2f11ef26a653f5932e5902f._UR1920,1080_BR-6_SX720_FMjpg_.jpg" alt="Before I Fall" class="mySlides fade">
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
  <h3 class="h1-home" style="margin-left: 10px;">
    <a href="{{ route('movies.index') }}" class="inline-flex items-center px-8 py-4 bg-amber-500 hover:bg-amber-600 text-white text-base font-medium rounded-md mt-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">All Movies</a>
  </h3>
  <div class="watchlistCarousel">
    @if(isset($movies))
    @include('layouts.partials.watchlistCarousel')
    @else
    <p>No movies in your watchlist</p>
    @endif

  </div>
  </div>



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