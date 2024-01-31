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
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('mail_code', 6);
            $table->date('input_date');
            $table->string('mail_from');
            $table->text('mail_subject');
            $table->string('mail_number');
            $table->date('mail_date');
            $table->text('document_location');
            $table->integer('mail_type')->length(4)->unsigned();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mails');
    }
};
