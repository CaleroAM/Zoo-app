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
        Schema::create('carefuls', function (Blueprint $table) {
            $table->id('id_careful');
            $table->string('date_start');
            $table->string('hour');
            $table->string('treatment');
            $table->string('amount_food');
            $table->timestamps();

            $table->unsignedBigInteger('fk_food');
            $table->unsignedBigInteger('fk_employee');
            $table->unsignedBigInteger('fk_animal');
            
            $table->foreign('fk_food')->references('id_food')->on('food')->onDelete('cascade');
            $table->foreign('fk_employee')->references('id_employee')->on('employees')->onDelete('cascade');
            $table->foreign('fk_animal')->references('id_animal')->on('animals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carefuls');
    }
};
