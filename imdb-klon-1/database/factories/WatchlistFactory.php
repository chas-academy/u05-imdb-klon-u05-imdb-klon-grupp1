<?php
#21/02
#Created a WatchlistFactory
#
#Deleted the CategoryListFactory
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
        return [
            'user_id' => User::all()->random()->id
        ];
    }
}
