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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('fk_promotion');
            $table->foreign('fk_promotion')->references('id')->on('promotions')->onDelete('cascade');
            $table->unsignedBigInteger('fk_section');
            $table->foreign('fk_section')->references('id')->on('sections')->onDelete('cascade');
            $table->string('matricule')->unique();
            $table->string('genre');
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
