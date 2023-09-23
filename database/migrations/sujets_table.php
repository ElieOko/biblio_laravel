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
        Schema::create('sujets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_etudiant');
            $table->foreign('fk_etudiant')->references('id')->on('etudiants')->onDelete('cascade');
            $table->unsignedBigInteger('fk_prof');
            $table->foreign('fk_prof')->references('id')->on('profs')->onDelete('cascade');
            $table->string('nom');
            $table->string('description');
            $table->string('fichier'); 
            $table->boolean('autorisation')->nullable()->default(false);    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sujets');
    }
};
