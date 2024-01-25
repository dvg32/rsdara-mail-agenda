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
        Schema::table('hospital_profiles', function (Blueprint $table) {
            //
            $table->string('company_name', 70);
            $table->char('type_class', 2);
            $table->string('hospital_code', 10);
            $table->string('village', 45);
            $table->string('district', 45);
            $table->string('city', 45);
            $table->string('province', 45);
            $table->integer('postal_code')->length(6)->unsigned();
            $table->string('phone', 15);
            $table->string('email', 30);
            $table->string('website', 30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hospital_profiles', function (Blueprint $table) {
            //
            $table->dropColumn('company_name');
            $table->dropColumn('type_class');
            $table->dropColumn('hospital_code');
            $table->dropColumn('village');
            $table->dropColumn('district');
            $table->dropColumn('city');
            $table->dropColumn('province');
            $table->dropColumn('postal_code');
            $table->dropColumn('phone');
            $table->dropColumn('email');
            $table->dropColumn('website');
        });
    }
};
