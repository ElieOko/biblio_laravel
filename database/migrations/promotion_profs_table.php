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
        Schema::create('promotion_profs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_prof');
            $table->foreign('fk_prof')->references('id')->on('profs')->onDelete('cascade');
            $table->unsignedBigInteger('fk_promotion');
            $table->foreign('fk_promotion')->references('id')->on('promotions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_profs');
    }
};
