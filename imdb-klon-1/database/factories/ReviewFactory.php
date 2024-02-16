<?php
#Created ReviewFactory and added test values
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;

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
            'user_id' => $this->faker->numberBetween(1, 10), // ...returns a value between 1 and 10
            'title_id' => $this->faker->numberBetween(1, 10),
            'rating' => $this->faker->randomDigit(),
            'comment' => $this->faker->text()
        ];
    }
}
