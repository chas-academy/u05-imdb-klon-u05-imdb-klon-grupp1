<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Movie;
use App\Models\Genre;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('movie_genre')) {
            
            Schema::disableForeignKeyConstraints();

            Schema::create('movie_genre', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Movie::class)->unsigned()->constrained(); // Changed to 'movie_id' from 'title_id' 
                $table->foreignIdFor(Genre::class)->unsigned()->constrained();
                /* $table->foreignId('title_id')->constrained('movies')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreignId('genre_id')->constrained('genres')->cascadeOnDelete()->cascadeOnUpdate(); */
                $table->timestamps();
            });
        }
        Schema::enableForeignKeyConstraints();
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('movie_genre');
    }
};
