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
    Schema::create('trips', function (Blueprint $table) {
        $table->id();
        $table->string('destination'); // Úti cél
        $table->string('transport'); // Utazás típusa (pl. busz, repülő)
        $table->integer('duration'); // Időtartam (napokban)
        $table->date('departure_date'); // Indulási időpont
        $table->date('arrival_date'); // Érkezési időpont
        $table->decimal('price', 10, 2); // Ár
        $table->text('description')->nullable(); // Leírás
        $table->integer('rating')->nullable(); // Értékelés (csillagok száma)
        $table->string('image_url')->nullable(); // Kép URL-je
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
