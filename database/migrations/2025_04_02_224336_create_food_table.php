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
        Schema::create('food', function (Blueprint $table) {
            $table->id('id_food');
            $table->string('name');
            $table->string('content');
            $table->integer('total_amount');
            $table->integer('cost');
            $table->timestamps();

            $table->unsignedBigInteger('fk_supplier');

            $table->foreign('fk_supplier')->references('rfc')->on('suppliers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
