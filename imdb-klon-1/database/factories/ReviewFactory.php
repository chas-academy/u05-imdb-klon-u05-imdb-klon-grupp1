<?php
#Created ReviewFactory and added test values
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;
use App\Models\Movie;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id, // ...returns a value between 1 and 10
            'movie_id' => Movie::all()->random()->id, // Changed to 'movie_id' from 'title_id' 
            'rating' => $this->faker->randomDigit(),
            'comment' => $this->faker->text()
        ];
    }
}
