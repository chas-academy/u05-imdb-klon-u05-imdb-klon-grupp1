<?php
#Created MovieFactory.php to generate data in the 'Movie' table
#Movietitle -> title and movie genre -> color
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    protected $model = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->sentence(45),
            'release_date' => $this->faker->date(),
            'img_path' => $this->faker->image(),
            'trailer_path' => $this->faker->url(),
            'top_rating' => $this->faker->randomNumber(5),
            'movie_genres' => $this->faker->colorName()
        ];
    }
}
