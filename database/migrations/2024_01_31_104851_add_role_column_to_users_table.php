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
        Schema::table('users', function (Blueprint $table) {
            // add one role after email column
            // $table->string('role')->after('email')->default('user'); ini bisa, tpi lebih baik
            $table->enum('role', ['superadmin','admin','user'])->after('email')->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //remove if there's role user
            $table->dropColumn('role');
        });
    }
};
