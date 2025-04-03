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
        Schema::create('empshifts', function (Blueprint $table) {
            $table->id('id_emps');
            $table->string('hours_worked', 4);
            $table->string('reason',40); 
            $table->timestamps();
            
            $table->unsignedBigInteger('fk_shift');
            $table->unsignedBigInteger('fk_employee');

            $table->foreign('fk_shift')->references('id_shift')->on('shifts')->onDelete('cascade');
            $table->foreign('fk_employee')->references('id_employee')->on('employees')->onDelete('casacade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empshifts');
    }
};
