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
        if (!Schema::hasTable('reviews')){
            Schema::create('reviews', function (Blueprint $table) {
                $table->id('review_id');
                $table->foreignId('user_id')->references('id')->on('User'); //adds user an movie primary keys. not sure if i should use constrained or references
                $table->foreignId('title_id')->references('id')->on('Movie');
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
