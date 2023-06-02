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
        Schema::table('serveurs', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id")->nullable();
            $table->foreign("user_id")->on("users")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('serveurs', function (Blueprint $table) {
            $table->dropColumn("user_id");
        });
    }
};
