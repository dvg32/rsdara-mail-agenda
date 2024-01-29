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
        Schema::table('outgoing_mails', function (Blueprint $table) {
            //
            $table->string('mail_code', 6);
            $table->date('input_date');
            $table->text('mail_subject');
            $table->date('mail_date');
            $table->text('document_location');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('outgoing_mails', function (Blueprint $table) {
            //
            $table->dropColumn('mail_code');
            $table->dropColumn('input_date');
            $table->dropColumn('mail_subject');
            $table->dropColumn('mail_date');
            $table->dropColumn('document_location');
            $table->dropColumn('status');
        });
    }
};
