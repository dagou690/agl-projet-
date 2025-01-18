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
    Schema::create('final_notes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('film_id')->constrained()->onDelete('cascade');
        $table->integer('note_finale'); // Note finale attribuée par le président
        $table->foreignId('president_id')->constrained('jury_members')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('final_notes');
}

};
