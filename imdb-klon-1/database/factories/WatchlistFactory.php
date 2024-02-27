<?php
#137
#Added a method to count from 1 and up when seeding watchlists
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Watchlist;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Watchlist>
 */
class WatchlistFactory extends Factory
{
    protected $model = Watchlist::class;

    /**
     * Define the model's default state.
     *
     * @return a random user_id
     */
    public function definition(): array
    {
        static $userId = 1;

        return [
            'user_id' => $userId++,
        ];
    }
}
