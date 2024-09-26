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
        Schema::create('suppliers', function (Blueprint $table) {
            // Defining columns
            $table->string('kd_supplier')->primary();    // Primary key
            $table->string('nama_supplier')->unique();   // Unique key
            $table->string('alamat');                    // Regular string column
            
            $table->timestamps();                        // Laravel's timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
