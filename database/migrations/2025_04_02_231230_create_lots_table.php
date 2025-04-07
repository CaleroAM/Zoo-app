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
        Schema::create('lots', function (Blueprint $table) {
            $table->id('id_lot');
            $table->string('date_cad',10);
            $table->string('portion',10);
            $table->string('date_start',10);
            $table->timestamps();

            $table->unsignedBigInteger('fk_food');

            $table->foreign('fk_food')->references('id_food')->on('food')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
