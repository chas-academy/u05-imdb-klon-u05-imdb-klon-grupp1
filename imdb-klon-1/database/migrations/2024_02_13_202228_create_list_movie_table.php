<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Movie;
use App\Models\CategoryList;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        if (!Schema::hasTable('list_movie')){
            
            Schema::disableForeignKeyConstraints();

            Schema::create('list_movie', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Movie::class, 'title_id')->unsigned()->constrained();
                $table->foreignIdFor(CategoryList::class, 'list_id')->unsigned()->constrained();
                /* $table->foreignId('title_id')->constrained(table: 'movies')->cascadeOnDelete()->cascadeOnUpdate(); // ...specifies what table to fetch information from
                $table->foreignId('list_id')->constrained(table: 'lists')->cascadeOnDelete()->cascadeOnUpdate(); */
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

        Schema::dropIfExists('list_movie');
    }
};
