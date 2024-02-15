<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable('movies')){
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('release_date');
            $table->text('img_path');
            $table->text('trailer_path');
            $table->integer('top_rating')->default(0);
            $table->string('movie_genres')->default(null);
            $table->foreignId('genre_id')->constrained('genres'); 
            $table->foreignId('review_id')->constrained('reviews');
           
          
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
