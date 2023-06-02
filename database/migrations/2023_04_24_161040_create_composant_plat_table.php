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
        Schema::create('composant_plat', function (Blueprint $table) {
             $table->foreignId('plat_id')->constrained("plats");
             $table->foreignId('composant_id')->constrained("composants");
            $table->primary(["plat_id", "composant_id"]);             
            $table->integer('quantite');
            $table->string('unite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composant_plat');
    }
};
