<?php
#19/02
#Changed the value of generated content for lists.

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CategoryList;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryList>
 */
class CategoryListFactory extends Factory
{
    protected $model = CategoryList::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'movie_id' => $this->faker->numberBetween(1, 10), // Changed to 'movie_id' from 'title_id' 
            'watchlist' => $this->faker->boolean()
        ];
    }
}
