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
    Schema::table('films', function (Blueprint $table) {
        $table->string('cover')->nullable(); // Colonne pour stocker le chemin de l'image
    });
}

public function down()
{
    Schema::table('films', function (Blueprint $table) {
        $table->dropColumn('cover');
    });
}

};
