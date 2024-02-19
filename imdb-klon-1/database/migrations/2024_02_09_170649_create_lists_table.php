<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Movie;
use App\Models\User;

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
                $table->foreignIdFor(User::class)->unsigned()->constrained();
                $table->foreignIdFor(Movie::class, 'title_id')->unsigned()->constrained();
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
