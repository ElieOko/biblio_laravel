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
        Schema::create('travail_scientifiques', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_etudiant');
            $table->string('prof');
            $table->string('nom');
            $table->string('description');
            $table->string('fichier'); 
            $table->boolean('autorisation')->nullable()->default(true); 
            $table->string("annee");  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travail_scientifiques');
    }
};
