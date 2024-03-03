<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Specific movies
        $movies = [
            [
                'title' => 'The Voyeurs',
                'release_date' => 2021,
                'genre' => 'Drama, Romance',
                'duration' => '1 h 56 min',
                'top_rating' => 6.1,
                'description' => 'A young couple (Sydney Sweeney and Justice Smith), find themselves becoming interested in the sex life of their neighbors across the street (Ben Hardy and Natasha Liu Bordizzo). What starts as an innocent curiosity turns into an unhealthy obsession, after they discover that one neighbor is cheating. Temptation and desire cause their lives to become tangled together leading to deadly consequences.',
                'trailer_path' => 'https://www.youtube.com/watch?v=_fiCdELSwwI',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/f632c2d7632c4d971592d020442441bd113e83d4fc985210bcf7892ad6e418dd._UR2000,3000_SX500_FMwebp_.png',
            ],
            [
                'title' => 'Goodnight Mommy',
                'release_date' => 2022,
                'genre' => 'Drama, Horror',
                'duration' => '1h 32m',
                'top_rating' => 5.7,
                'description' => 'Twin brothers arrive at their Mother’s country home to discover her face covered in bandages—the result, she explains, of recent cosmetic surgery. As her behavior grows increasingly erratic and unusual, however, a horrifying thought takes root in the boys’ minds: the sinking suspicion that the woman beneath the gauze isn’t their mother at all.',
                'trailer_path' => 'https://www.youtube.com/watch?v=3lKm2Vct3x4',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/715e819ef5e38dc7a8a532172d07ffd634fdc1d39a41a45fb93b886e70b3e8c2._UR2000,3000_SX750_FMwebp_.jpg',
            ],
            [
                'title' => 'The Purge',
                'release_date' => 2013,
                'genre' => 'Horror, Sci-Fi, Thriller',
                'duration' => '1h 54m',
                'top_rating' => 7.3,
                'description' => 'A wealthy family is held hostage for harboring the target of a murderous syndicate during the Purge, a 12-hour period in which any and all crime is legal.',
                'trailer_path' => 'https://www.youtube.com/watch?v=s43Lr3ITPjc',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/5021f75678546781775641e6caa371a6908d133e3b6fbd7885172711b9bff40d.jpg',
            ],
            [
                'title' => 'The Invitation',
                'release_date' => 2022,
                'genre' => 'Mystery & thriller',
                'duration' => '2h 4m',
                'top_rating' => 6.1,
                'description' => 'A young woman is courted and swept off her feet, only to realize a gothic conspiracy is afoot.',
                'trailer_path' => 'https://www.youtube.com/watch?v=5bL1ftuxgOE',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/14d958c2db1363c2424113bead4323d2323cabe6ffdabd8d15c669c460b9f36e.jpg',
            ],
            [
                'title' => 'Midsommar',
                'release_date' => 2023,
                'genre' => 'Drama, Horror, Mystery',
                'duration' => '2h 49m',
                'top_rating' => 7.5,
                'description' => 'British stockbroker Nicholas Winton visits Czechoslovakia in the 1930s and forms plans to assist in the rescue of Jewish children before the onset of World War II, in an operation that came to be known as the Kindertransport.',
                'trailer_path' => 'https://www.youtube.com/watch?v=1Vnghdsjmd0',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/3d493cdebe7629f475205fe095cd89b17529fb7e2664505be2a81ffedd802aac.jpg',
            ],
            [
                'title' => 'Wonka',
                'release_date' => 2023,
                'duration' => '1h 42m',
                'genre' => 'Fantasy, comedy, family',
                'top_rating' => 7.3,
                'description' => 'Willy Wonka – chock-full of ideas and determined to change the world one delectable bite at a time – is proof that the best things in life begin with a dream, and if you’re lucky enough to meet Willy Wonka, anything is possible.',
                'trailer_path' => 'https://www.youtube.com/watch?v=otNh9bTjXWg',
                'img_path' => 'https://media.themoviedb.org/t/p/original/qhb1qOilapbapxWQn9jtRCMwXJF.jpg',
            ],
            [
                'title' => 'The Hunger Games',
                'release_date' => 2023,
                'genre' => 'crime, drama, thriller',
                'duration' => '1h 59m',
                'top_rating' => 6.4,
                'description' => '64 years before he becomes the tyrannical president of Panem, Coriolanus Snow sees a chance for a change in fortunes when he mentors Lucy Gray Baird, the female tribute from District 12.',
                'trailer_path' => 'https://www.youtube.com/watch?v=RDE6Uz73A7g',
                'img_path' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/mBaXZ95R2OxueZhvQbcEWy2DqyO.jpg',
            ],
            [
                'title' => 'Aquaman',
                'release_date' => 2023,
                'genre' => 'action, adventure, fantasy',
                'duration' => '2h 4m',
                'top_rating' => 6.1,
                'description' => 'Black Manta seeks revenge on Aquaman for his father\'s death. Wielding the Black Trident\'s power, he becomes a formidable foe. To defend Atlantis, Aquaman forges an alliance with his imprisoned brother. They must protect the kingdom.',
                'trailer_path' => 'https://www.youtube.com/watch?v=aD3v7gPZ2Lw',
                'img_path' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/7lTnXOy0iNtBAdRP3TZvaKJ77F6.jpg',
            ],
            [
                'title' => 'Barbie',
                'release_date' => 2023,
                'genre' => 'Comedy, Adventure',
                'duration' => '1h 54m',
                'top_rating' => 7.3,
                'description' => 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.',
                'trailer_path' => 'https://www.youtube.com/watch?v=pBk4NYhWNMM',
                'img_path' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg',
            ],
            [
                'title' => 'One Life',
                'release_date' => 2024,
                'genre' => ' Biography, Drama, History',
                'duration' => '2h 49m',
                'top_rating' => 7.5,
                'description' => 'British stockbroker Nicholas Winton visits Czechoslovakia in the 1930s and forms plans to assist in the rescue of Jewish children before the onset of World War II, in an operation that came to be known as the Kindertransport.',
                'trailer_path' => 'https://www.youtube.com/watch?v=P9G-PA1oMPI',
                'img_path' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/kmGCB4TTMEphUSxDHsDULDgJMuB.jpg',
            ],
        ];

        /**
         * Separate the movies into single movies
         * creates them using the movie class 
         * assigns the genre connection 
         */
        foreach ($movies as $movieData) {
            $title = $movieData['title']; // ...access the title of each movie
            $genre = $movieData['genre']; // ...access the genres of each movie

            $movie = Movie::create($movieData); // ...create a new movie from the movies array

            $genreNames = explode(',', $genre); // ...split genres into an array if there is multiple on one movie

            // Create or accossiate genres with a movie 
            foreach ($genreNames as $genreName) {
                $genreName = trim($genreName); // ...remove leading and trailing whitespace

                $genre = Genre::firstOrCreate(['name' => $genreName]); // ...find/create the 'genre->name' value that matches 'movie->genre'
                $movie->genres()->attach($genre->id); // ...apply the genre id to the 'movie->genre'
            }
        }
    }
}
