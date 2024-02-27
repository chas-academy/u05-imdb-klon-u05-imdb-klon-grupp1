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
                'title' => 'Upgraded',
                'release_date' => 2024,
                'genre' => 'Drama, Romance, Comedy', 
                'duration' => '1h 30m',
                'top_rating' => 8.5,
                'description' => 'When Ana is upgraded to first class on a work trip, she meets handsome Will, who mistakes Ana for her boss, Claire. A white lie then sets off a glamorous chain of events, romance and opportunity, until her fib threatens to surface.',
                'trailer_path' => 'https://www.youtube.com/watch?v=P3_dj7BnHp8',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/af5f3bfd605bcf60c762eee7cc2f94d6bd3c1514573440c4cd28126c662e3820._UR1920,1080_BR-6_SX720_FMpng_.png',
            ],
            [
                'title' => 'Before I Fall',
                'release_date' => 2017,
                'genre' => 'Drama, Fantasy, Mystery', 
                'duration' => '1h 59m',
                'top_rating' => 6.4,
                'description' => '64 years before he becomes the tyrannical president of Panem, Coriolanus Snow sees a chance for a change in fortunes when he mentors Lucy Gray Baird, the female tribute from District 12.',
                'trailer_path' => 'https://www.youtube.com/watch?v=2zEXxdI-9Cw',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/c9a768bbc37d687ae0a7b654823149a383f881c9b2f11ef26a653f5932e5902f._UR1920,1080_BR-6_SX720_FMjpg_.jpg',
            ],
            [
                'title' => 'The Purge',
                'release_date' => 2013,
                'genre' => 'Horror, Sci-Fi, Thriller', 
                'duration' => '1h 54m',
                'top_rating' => 7.3,
                'description' => 'A wealthy family is held hostage for harboring the target of a murderous syndicate during the Purge, a 12-hour period in which any and all crime is legal.',
                'trailer_path' => 'https://www.youtube.com/watch?v=s43Lr3ITPjc',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/9e90d3e659f8afecc25a3805bb4bbcb1ade262ce2f4553b4790181ed75305e09._UR1920,1080_BR-6_SX720_FMjpg_.jpg',
            ],
            [
                'title' => 'Invitation',
                'release_date' => 2022,
                'genre' => 'Mystery & thriller', 
                'duration' => '2h 4m',
                'top_rating' => 6.1,
                'description' => 'A young woman is courted and swept off her feet, only to realize a gothic conspiracy is afoot.',
                'trailer_path' => 'https://www.youtube.com/watch?v=5bL1ftuxgOE',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/1b2cb0767387e87857d7a78684502fcda060fde0fbe22d702c9a3c29925106d3._UR1920,1080_BR-6_SX720_FMjpg_.jpg',
            ],
            [
                'title' => 'Mid Sommar',
                'release_date' => 2023,
                'genre' => 'Drama, Horror, Mystery', 
                'duration' => '2h 49m',
                'top_rating' => 7.5,
                'description' => 'British stockbroker Nicholas Winton visits Czechoslovakia in the 1930s and forms plans to assist in the rescue of Jewish children before the onset of World War II, in an operation that came to be known as the Kindertransport.',
                'trailer_path' => 'https://www.youtube.com/watch?v=1Vnghdsjmd0',
                'img_path' => 'https://m.media-amazon.com/images/S/pv-target-images/ed15ec716998dcba6bb9bc04d00507d9949cfd17bea35497e6282827c5a0b3e0._UR1920,1080_BR-6_SX720_FMjpg_.jpg',
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

        foreach ($movies as $movieData) {
            $movie = Movie::create($movieData);

            // Attach random genres to the movie
            $genres = Genre::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $movie->genres()->attach($genres);
        }

        // Generate random movies
        Movie::factory()->count(10 - count($movies))->create();

        /**
         * For each 'Movie'
         * Find a random genre via its 'id'
         * Add the genre to the movie
         */
        foreach (Movie::all() as $movie) {
            $genre = Genre::inRandomOrder()->take(rand(1, 10))->pluck('id');
            $movie->genres()->attach($genre);
        }
    }
}


