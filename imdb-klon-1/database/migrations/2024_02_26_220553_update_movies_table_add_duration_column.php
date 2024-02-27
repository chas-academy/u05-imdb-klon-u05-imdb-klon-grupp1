<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMoviesTableAddDurationColumn extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('movies', 'duration')) {
        Schema::table('movies', function (Blueprint $table) {
            $table->string('duration')->default('0h 0m')->after('description');
        });
    }
}

    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('duration');
        });
    }
}
