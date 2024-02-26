<?php
#118
#Created a more realistic database that we can work with
#Added a method that gives the movies a genre based on the id input <- this is not what we want. We want it to be based on input i think..
#Added comments in the code to explain what it does.
#Added logit to take 'movie->genre' and compare it to 'genre->name' and save as id.
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Create Single movies as objects
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'description' => 'A man is wrongfully convicted of murder and sent to prison, where he struggles to survive and maintain his hope.',
                'release_date' => '1994-09-10',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEyLWVkYWUtYTI2Ni05Y2NkLWVkMjJlY29kZmM2XkEyXkFqcGdeQXVyMTQxNzMzNTI@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=NmzuHjWmD6Y',
                'top_rating' => 9.3,
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Crime, Drama',
                'description' => 'A powerful mafia family struggles to maintain control over its empire.',
                'release_date' => '1972-03-24',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlOWE5OWFmZjE2XkEyXkFqcGdeQXVyNzkwMjY5MDA@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=sY1S3497oMA',
                'top_rating' => 9.2,
            ],
            [
                'title' => 'The Dark Knight',
                'genre' => 'Action, Thriller',
                'description' => 'Batman battles the Joker, a sadistic villain threatening to destroy Gotham City.',
                'release_date' => '2008-07-18',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'top_rating' => 9.0,
            ],
            [
                'title' => 'Pulp Fiction',
                'genre' => 'Crime, Comedy',
                'description' => 'Multiple stories are woven together in a violent and entertaining tale of gangsters, boxers, and criminals.',
                'release_date' => '1994-10-14',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzYwZTFiMWNkNmQ5XkEyXkFqcGdeQXVyNzkwMjY5MDA@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
                'top_rating' => 8.9,
            ],
            [
                'title' => '12 Angry Men',
                'genre' => 'Drama, Crime',
                'description' => 'A jury must come to a decision about a man´s life in a trial where the evidence is weak.',
                'release_date' => '1957-04-10',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNzBmMDkwODMtY2Q4Yi00YWU1LTg0MTctZTM4M2E1MTBmYzJlXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=G7RgN_mCIDk',
                'top_rating' => 8.9,
            ],
            [
                'title' => 'Schindler´s List',
                'genre' => 'Action, Comedy',
                'description' => 'A German businessman saves the lives of Jews during the Holocaust.',
                'release_date' => '1993-12-15',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMTkzNDE3OTEwM15BMl5BanBnXkFtZTcwMzM2MTk2Mw@@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=YE7VzlL7c8s',
                'top_rating' => 8.9,
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'genre' => 'Action, Comedy',
                'description' => 'Frodo and his companions journey to Mordor to destroy the One Ring.',
                'release_date' => '2003-12-17',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNzA5ZDc2NDctNTY5MC00NDg2LWE4MTMtYTgwMjY5MWJhMGY0XkEyXkFqcGdeQXVyNDUyOTg4Nzg@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=r5X-hFf6B94',
                'top_rating' => 8.9,
            ],
            [
                'title' => 'Forrest Gump',
                'genre' => 'Drama, Romance',
                'description' => 'A simple man with a low IQ is gifted uncommon athletic and social skills. He goes on to have several life-changing experiences, unintentionally influencing the course of history.',
                'release_date' => '1994-06-11',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNTE3MTg3MzEzM_UY1200_AA1200_AM300_CR0,0,1200,675_AL_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=u67Q_TvwFUY',
                'top_rating' => 8.8,
            ],
            [
                'title' => 'Fight Club',
                'genre' => 'Drama, Thriller',
                'description' => 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into something much, much more.',
                'release_date' => '1999-10-15',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMjI4MTU0NTkxN15BMl5BanBnXkFtZTcwNzEyMTkyMTEyXkEyXkFqcGdeQXVyNzkwMjY5MDA@._V1_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=SU34K1Zv34o',
                'top_rating' => 8.3,
            ],
            [
                'title' => 'Inception',
                'genre' => 'Action, Adventure, Thriller',
                'description' => 'A professional thief who steals corporate secrets through use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'release_date' => '2010-07-16',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BMjAxMjMxNjAyNF5BMl5BanBnXkFtZTcwNjg0NDA0Ny5DbFBwSHJvZGUvLmVkYXpoAAk4NWRhNmEwYyhlOGFkYzQ4XzAyNzkxODhkXFwuY3B_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=YoHDwqTK79I',
                'top_rating' => 8.8,
            ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'genre' => 'Adventure, Fantasy',
                'description' => 'hobbit named Frodo inherits the One Ring, and he and eight companions set out on a journey to destroy it in the fires of Mount Doom.',
                'release_date' => '2001-12-19',
                'img_path' => 'https://m.media-amazon.com/images/M/MV5BNzA5ZDc2YTcwMGY0NzU5MHxmL1VYNDYwMjI0MTMxODQzMTE5XzE0MTgwMDg2MjQyNjk4MzI0_V1_SX0960_CR0,0,960,540_.jpg',
                'trailer_path' => 'https://www.youtube.com/watch?v=vCTXNtWAsDc',
                'top_rating' => 8.8,
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
