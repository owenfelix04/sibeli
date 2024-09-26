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
        Schema::create('d_masuks', function (Blueprint $table) {
            $table->string('kd_masuk')->primary(); // primary key
            $table->string('id_masuk'); // foreign key
            $table->string('kd_barang_beli'); // foreign key
            $table->integer('jumlah');
            $table->double('subtotal', 15, 2); // 15 digits total, 2 after decimal
            $table->timestamps();
            
            // Defining foreign key relationships (assuming you have these tables)
            // $table->foreign('id_masuk')->references('id')->on('masuks');
            // $table->foreign('kd_barang_beli')->references('kd_barang')->on('barang_belis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_masuks');
    }
};
