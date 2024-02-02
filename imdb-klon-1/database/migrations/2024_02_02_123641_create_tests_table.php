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
        Schema::create(
            'tests',

            function (Blueprint $table) {
                $table->id();
                $table->string('fillable_string');
                $table->decimal('fillable_int');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('orders', 'estimation')) {
            Schema::table(
                'orders',
                function (Blueprint $table) {

                    $table->dropColumn('estimation');
                }
            );
        }
    }
};
