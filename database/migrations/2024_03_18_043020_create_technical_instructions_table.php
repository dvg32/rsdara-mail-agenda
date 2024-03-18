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
        Schema::create('technical_instructions', function (Blueprint $table) {
            $table->id();
            $table->string('judul_juknis');
            $table->string('file_upload');
            $table->date('waktu_dibuat');
            $table->foreignId('employee_id');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_instructions');
    }
};
