<?php
#Removed the name if the primary key in 'create_reviews_table' to match the convension and our ERD.
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Movie;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        if (!Schema::hasTable('reviews')){
            
            Schema::disableForeignKeyConstraints();

            Schema::create('reviews', function (Blueprint $table) {
                $table->id();
                $table->float('rating');
                $table->text('comment');
                $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
                $table->foreignId('movie_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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

        Schema::dropIfExists('reviews');
    }
};
