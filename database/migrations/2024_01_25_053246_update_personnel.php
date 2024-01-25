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
        //
        Schema::table('personnels', function (Blueprint $table) {
            $table->string('fullname');
            $table->string('nip');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('personnels', function(Blueprint $table) {
            $table->dropColumn('fullname');
            $table->dropColumn('nip');
            $table->dropColumn('status');
        });
    }
};
