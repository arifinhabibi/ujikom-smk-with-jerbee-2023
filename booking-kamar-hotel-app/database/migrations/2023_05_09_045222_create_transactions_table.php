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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('products')->onDelete('cascade');
            $table->string('nomor_unik', 10);
            $table->string('nama_pelanggan', 45);
            $table->string('nomor_hp');
            $table->string('tgl_checkin');
            $table->integer('uang_bayar');
            $table->integer('uang_kembali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
