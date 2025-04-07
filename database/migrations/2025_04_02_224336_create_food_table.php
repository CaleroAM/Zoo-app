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
            $table->string('name',40);
            $table->string('content',40);
            $table->integer('total_amount');
            $table->integer('cost');
            $table->timestamps();

            $table->string('fk_supplier',20);

            $table->foreign('fk_supplier')->references('rfc')->on('suppliers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
