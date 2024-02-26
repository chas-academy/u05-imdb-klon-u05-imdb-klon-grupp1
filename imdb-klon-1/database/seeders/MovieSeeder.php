<?php
#118
#Created a more realistic database that we can work with
#Added a method that gives the movies a genre based on the id input <- this is not what we want. We want it to be based on input i think..
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Single movies as objects
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'A man is wrongfully convicted of murder and sent to prison, where he struggles to survive and maintain his hope.',
                'release_date' => '1994-09-10',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEyLWVkYWUtYTI2Ni05Y2NkLWVkMjJlY29kZmM2XkEyXkFqcGdeQXVyMTQxNzMzNTI@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=NmzuHjWmD6Y',
                'top_rating' => 9.3,
            ],
            [
                'title' => 'The Godfather',
                'description' => 'A powerful mafia family struggles to maintain control over its empire.',
                'release_date' => '1972-03-24',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlOWE5OWFmZjE2XkEyXkFqcGdeQXVyNzkwMjY5MDA@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=sY1S3497oMA',
                'top_rating' => 9.2,
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'Batman battles the Joker, a sadistic villain threatening to destroy Gotham City.',
                'release_date' => '2008-07-18',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'top_rating' => 9.0,
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'Multiple stories are woven together in a violent and entertaining tale of gangsters, boxers, and criminals.',
                'release_date' => '1994-10-14',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzYwZTFiMWNkNmQ5XkEyXkFqcGdeQXVyNzkwMjY5MDA@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
                'top_rating' => 8.9,
            ],
            [
                'title' => '12 Angry Men',
                'description' => 'A jury must come to a decision about a man´s life in a trial where the evidence is weak.',
                'release_date' => '1957-04-10',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNzBmMDkwODMtY2Q4Yi00YWU1LTg0MTctZTM4M2E1MTBmYzJlXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=G7RgN_mCIDk',
                'top_rating' => 8.9,
            ],
            [
                'title' => 'Schindler´s List',
                'description' => 'A German businessman saves the lives of Jews during the Holocaust.',
                'release_date' => '1993-12-15',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMTkzNDE3OTEwM15BMl5BanBnXkFtZTcwMzM2MTk2Mw@@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=YE7VzlL7c8s',
                'top_rating' => 8.9,
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'description' => 'Frodo and his companions journey to Mordor to destroy the One Ring.',
                'release_date' => '2003-12-17',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNzA5ZDc2NDctNTY5MC00NDg2LWE4MTMtYTgwMjY5MWJhMGY0XkEyXkFqcGdeQXVyNDUyOTg4Nzg@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=r5X-hFf6B94',
                'top_rating' => 8.9,
            ],
        ];

        /**
         * Separate the movies into single movies
         * creates them using the movie class 
         * assigns the genre connection 
         */
        foreach ($movies as $movieData) {
            $movie = Movie::create($movieData); 

            $movie->genres()->attach([1, 3]);
        }
        
    }
}
