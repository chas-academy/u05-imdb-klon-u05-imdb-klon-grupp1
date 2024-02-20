<?php
#Changed the way we define foreign keys to make it easier to work with. 'Model::class' will use the 'model_id' naming convention.

use App\Models\Review;
use App\Models\Genre;
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
                $table->text('description');
                $table->integer('release_date');
                $table->text('img_path');
                $table->text('trailer_path');
                $table->integer('top_rating')->default(0);
                $table->foreignId('genre_id')->constrained();
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
