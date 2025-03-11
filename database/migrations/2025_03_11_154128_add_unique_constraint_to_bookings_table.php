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
    Schema::table('bookings', function (Blueprint $table) {
        // Egyedi index létrehozása a property_id és start_date oszlopokra
        $table->unique(['property_id', 'start_date', 'end_date'], 'unique_booking');
    });
}

public function down()
{
    Schema::table('bookings', function (Blueprint $table) {
        // Egyedi index eltávolítása
        $table->dropUnique('unique_booking');
    });
}


};
