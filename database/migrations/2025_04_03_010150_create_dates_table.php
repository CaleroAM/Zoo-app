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
        Schema::create('dates', function (Blueprint $table) {
            $table->bigIncrements('id_date');
            $table->unsignedBigInteger('id_employee');
            $table->string('phone',16);
            $table->string('email',40);
            $table->string('street',40);
            $table->string('cologne',40);
            $table->string('cp',10); 
            $table->string('state',40);
            $table->timestamps();


            $table->foreign('id_employee')->references('id_employee')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dates');
    }
};
