<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_info_employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_info_id');
            $table->unsignedBigInteger('employee_id');
            $table->timestamps();

            $table->foreign('car_info_id')->references('id')->on('client_car_info')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_info_employee');
    }
};
