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
        Schema::table('references', function (Blueprint $table) {
            //
            $table->bigInteger('parent_id')->length(20)->unsigned()->nullable();
            $table->string('description', 45);
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('references', function (Blueprint $table) {
            //
            $table->dropColumn('parent_id');
            $table->dropColumn('description');
            $table->dropColumn('status');
        });
    }
};
