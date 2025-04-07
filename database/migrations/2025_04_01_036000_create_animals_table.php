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
            $table->id('id_animal');
            $table->string('name', 40);
            $table->string('age', 4);
            $table->string('weigh', 4);
            $table->string('height', 3);
            $table->string('sex', 1);
            $table->string('fecha_nac', 10);
            $table->string('descripcion', 100);
            $table->timestamps();
            
            //Claves foráneas
            $table->unsignedBigInteger('fk_specie');
            $table->unsignedBigInteger('fk_zone');
            
            //Relacione
            $table->foreign('fk_specie')->references('id_specie')->on('species')->onDelete('cascade');
            $table->foreign('fk_zone')->references('id_zone')->on('zones')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
