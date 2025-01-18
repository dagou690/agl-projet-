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
    Schema::table('jury_members', function (Blueprint $table) {
        $table->string('role')->default('member'); // 'member' pour les membres du jury, 'president' pour le président
    });
}

public function down()
{
    Schema::table('jury_members', function (Blueprint $table) {
        $table->dropColumn('role');
    });
}

};
