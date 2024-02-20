<?php
#20/02
#Re-wrote the foreign id to be a unsignedBigInt
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

        if(!Schema::hasTable('lists')){
            
            Schema::disableForeignKeyConstraints();

            Schema::create('lists', function (Blueprint $table) {
                $table->id(); // to create an auto-incrementing primary key column 
                $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
                $table->foreignId('movie_id')->constrained()->onDelete('cascade')->onUpdate('cascade'); // Changed to 'movie_id' from 'title_id' 
                $table->boolean('watchlist');
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

        Schema::dropIfExists('lists');
    }
};
