<?php
#Created a Seeder for 'CategoryList' -> 
#Added a factory method to generate fake content in the db.
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryList;

class CategoryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryList::factory()->count(10)->create();
    }
}
