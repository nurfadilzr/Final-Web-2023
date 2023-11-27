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
        Schema::create('data_buyer', function (Blueprint $table) {
            $table->id();
            $table->text('email')->unique();
            $table->string('no_telp', 13)->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('username', 10)->unique();
            $table->string('password', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
