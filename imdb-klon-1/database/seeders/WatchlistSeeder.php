<?php
#21/02
#Created a WatchlistSeeder and added it to 'DatabaseSeeder'
#Deleted the CategoryListSeeder
namespace Database\Seeders;

use App\Models\Watchlist;
use App\Models\Movie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Watchlist::factory()->count(10)->create();

        /**
         * For each watchlist
         * Find a random 'Movie' with random id 1 to 10
         * Add the movie to a watchlist.
         */
        foreach (Watchlist::all() as $watchlist) {
            $movies = Movie::inRandomOrder()->take(rand(1,10))->pluck('id');
            $watchlist->movies()->attach($movies);
        }
    }
}
