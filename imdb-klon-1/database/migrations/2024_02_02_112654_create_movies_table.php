<?php
#118
#Added 'genre' to movies table to reference the genre_name
#'top_rating' is now a float to show decimal value.
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
            
            Schema::disableForeignKeyConstraints();

            Schema::create('movies', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('genre');
                $table->text('description');
                $table->integer('release_date');
                $table->text('img_path');
                $table->text('trailer_path');
                $table->float('top_rating')->default(0);
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

        Schema::dropIfExists('movies');
    }
};
