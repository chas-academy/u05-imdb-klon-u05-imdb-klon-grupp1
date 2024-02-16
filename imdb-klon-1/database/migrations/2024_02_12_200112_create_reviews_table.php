<?php
#Removed the name if the primary key in 'create_reviews_table' to match the convension and our ERD.
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
        if (!Schema::hasTable('reviews')){
            Schema::create('reviews', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained(); // ->references('id')->on('User'); changed for constrained
                $table->foreignId('title_id')->constrained('movies');
                $table->float('rating');
                $table->text('comment');
                $table->timestamps();
            });
        }
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
