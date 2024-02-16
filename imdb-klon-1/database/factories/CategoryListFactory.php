<?php
#Created CategoryListFactory.php and changed ->
#Added 'faker' information to generate content

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
            'user_id' => $this->faker->randomNumber(),
            'title_id' => $this->faker->randomNumber()
        ];
    }
}
