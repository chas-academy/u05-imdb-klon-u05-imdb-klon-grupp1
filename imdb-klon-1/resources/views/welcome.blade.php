@extends('layouts.app')

@section('titletab', 'Home')
<!-- html tag, name -->

@section('content')

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
"
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
            <div class="card">
                <img class="card-img-top"
                    src="https://media.themoviedb.org/t/p/original/qhb1qOilapbapxWQn9jtRCMwXJF.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">Wonka</h3>
                    <p class="card-text">2023 | 1h 42m |  Fantasy, comedy, family</p>

                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>7.3</p>
                    <p class="card-text"><small class="text">
Willy Wonka – chock-full of ideas and determined to change the world one delectable bite at a time – is proof that the best things in life begin with a dream, and if you’re lucky enough to meet Willy Wonka, anything is possible.</small></p>

                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=otNh9bTjXWg" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>
            <div class="card">
                <img class="card-img-top"
                    src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/mBaXZ95R2OxueZhvQbcEWy2DqyO.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">The Hunger Games</h3>
                    <p class="card-text">2023 | 1h 59m | crime, drama, thriller</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>6.4</p>
                    <p class="card-text"><small class="text">64 years before he becomes the tyrannical president of Panem, Coriolanus Snow sees a chance for a change in fortunes when he mentors Lucy Gray Baird, the female tribute from District 12..</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=RDE6Uz73A7g" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>

            <div class="card">
                <img class="card-img-top"
                    src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/7lTnXOy0iNtBAdRP3TZvaKJ77F6.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index"> Aquaman</h3>
                    <p class="card-text">2023 | 2h 4m | action, adventure, fantasy</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>6.1</p>
                    <p class="card-text"><small class="text">Black Manta seeks revenge on Aquaman for his father's death. Wielding the Black Trident's power, he becomes a formidable foe. To defend Atlantis, Aquaman forges an alliance with his imprisoned brother. They must protect the kingdom.</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=aD3v7gPZ2Lw" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>

            <div class="card">
                <img class="card-img-top"
                    src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">Barbie</h3>
                    <p class="card-text">2023 | 1h 54m | Comedy, Adventure
</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>7.3</p>
                    <p class="card-text"><small class="text">
Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=pBk4NYhWNMM" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>

            <div class="card">
                <img class="card-img-top"
                    src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/kmGCB4TTMEphUSxDHsDULDgJMuB.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title card-index">One Life</h3>
                    <p class="card-text"> 2024 | 2h 49m | Drama, History, War</p>
                    <p class="card-text"><i class="fa fa-star" style="color:#DBA506" aria-hidden="true"></i>7.5</p>
                    <p class="card-text"><small class="text">British stockbroker Nicholas Winton visits Czechoslovakia in the 1930s and forms plans to assist in the rescue of Jewish children before the onset of World War II, in an operation that came to be known as the Kindertransport.</small></p>
                </div>
                <a class="btn btn-primary" href="https://www.youtube.com/watch?v=P9G-PA1oMPI" role="button"><i
                        class="fa fa-play" aria-hidden="true"></i>Trailer</a>
            </div>
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
       
  @endsection



