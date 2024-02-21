<?php
#21/02
#Created a WatchlistSeeder and added it to 'DatabaseSeeder'
#Deleted the CategoryListSeeder
namespace Database\Seeders;

use App\Models\Watchlist;
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
    }
}
