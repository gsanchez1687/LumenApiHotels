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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('department_id')->unsigned();
            $table->string('name',100);
            $table->longText('address');
            $table->string('nit',20);
            $table->string('email',100);
            $table->string('phone',20);
            $table->integer('amount');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
