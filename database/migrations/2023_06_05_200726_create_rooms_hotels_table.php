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
        Schema::create('rooms_hotels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hotel_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->integer('amount');
            $table->timestamps();
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('room_id')->references('id')->on('rooms');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms_hotels');
    }
};
