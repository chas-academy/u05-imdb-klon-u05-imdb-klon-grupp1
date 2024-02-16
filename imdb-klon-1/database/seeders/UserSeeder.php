<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Add this line to import the User model
use Illuminate\Support\Facades\Hash; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Demo user',
            'email' => 'Demo@email.com',
            'password' => Hash::make('123456'),
            'role' => 'user', // Adjust as per your requirements
        ]);
    }
    


}







