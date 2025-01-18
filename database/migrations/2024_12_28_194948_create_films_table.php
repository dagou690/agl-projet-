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
        // Vérifier si la table 'films' existe avant de la créer
        if (!Schema::hasTable('films')) {
            Schema::create('films', function (Blueprint $table) {
                $table->id();
                $table->string('titre');
                $table->date('date'); // Colonne pour la date
                $table->string('sujet'); // Sujet du film
                $table->foreignId('realisateur_id')->constrained('realisateurs'); // FK vers realisateurs
                $table->foreignId('producteur_id')->constrained('producteurs'); // FK vers producteurs
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
