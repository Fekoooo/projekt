<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('trip_bookings', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('trip_id'); // Az utazás azonosítója
        $table->string('name');
        $table->string('email');
        $table->date('start_date'); // Indulási dátum
        $table->date('end_date'); // Érkezési dátum
        $table->timestamps();

        // Külső kulcsok
        $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_bookings');
    }
};
