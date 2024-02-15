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
        if (!Schema::hasTable('list_movie')){
            Schema::create('list_movie', function (Blueprint $table) {
                $table->id();
                $table->foreignId('title_id')->constrained(table: 'movies');
                $table->foreignId('list_id')->constrained(table: 'lists');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_movie');
    }
};
