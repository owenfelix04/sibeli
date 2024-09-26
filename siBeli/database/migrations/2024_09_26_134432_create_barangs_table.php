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
        Schema::create('barangs', function (Blueprint $table) {
            $table->string('kd_barang')->primary();   // Primary key
            $table->string('nama_barang')->unique();  // Unique key
            $table->integer('satuan');
            $table->double('status');
            $table->double('stok');
            $table->integer('harga_beli');
            $table->boolean('harga_jual');
            $table->timestamps();  // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
