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
        Schema::create('notes', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->foreignId('film_id')->constrained('films')->onDelete('cascade'); // Film noté
            $table->foreignId('jury_member_id')->constrained('jury_members')->onDelete('cascade'); // Membre du jury
            $table->integer('note'); // Note attribuée
            $table->timestamps(); // Créé et mis à jour automatiquement
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
