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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah');
            $table->decimal('harga', 6);
            $table->integer('id_produk', 11);
            $table->bigInteger('id_buyer', 20);
            $table->timestamps();

            $table->foreign('id_produk')->references('id')->on('produk');
            $table->foreign('id_buyer')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
