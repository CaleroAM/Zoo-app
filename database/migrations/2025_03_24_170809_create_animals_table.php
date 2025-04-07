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
        Schema::create('animals', function (Blueprint $table) {
            /*$table->tipo('name', cantidad) ->prymary() o nullable(); */
            $table->id('id_animal', 6)->primary();
            $table->string('name', 50);
            $table->string('age', 4);
            $table->string('weigh', 4);
            $table->string('height', 3);
            $table->string('sex', 1);
            $table->string('fecha_nac', 10);
            $table->string('descripcion', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
