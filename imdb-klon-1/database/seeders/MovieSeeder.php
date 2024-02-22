<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Movie;
use App\Models\Watchlist;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::factory()->count(10)->create();

        /**
         * For each 'Movie'
         * Find a random genre via its 'id'
         * Add the genre to the movie
         */
        foreach (Movie::all() as $movie) {
            $genre = Genre::inRandomOrder()->take(rand(1,10))->pluck('id');
            $movie->genres()->attach($genre);
        }
    }
}
