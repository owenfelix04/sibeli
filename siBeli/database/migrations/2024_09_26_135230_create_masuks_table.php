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
        Schema::create('masuks', function (Blueprint $table) {
            // Defining columns
            $table->string('kd_masuk')->primary();             // Primary key
            $table->date('tgl_masuk');                         // Date field
            $table->string('kd_admin');                        // Foreign key to 'admins' table
            $table->string('kd_supplier');                     // Foreign key to 'suppliers' table
            $table->integer('total_masuk');                    // Integer for total_masuk
            
            // Foreign key constraints (assuming `admins` and `suppliers` tables exist)
            $table->foreign('kd_admin')->references('kd_admin')->on('admins')->onDelete('cascade');
            $table->foreign('kd_supplier')->references('kd_supplier')->on('suppliers')->onDelete('cascade');

            $table->timestamps();                              // Laravel's timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masuks');
    }
};
