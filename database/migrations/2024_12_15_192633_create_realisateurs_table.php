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
        Schema::create('realisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Code unique du réalisateur
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisateurs');
    }
};
