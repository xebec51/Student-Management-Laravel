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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id(); // Ini adalah kolom ID (primary key)

            // TAMBAHKAN DUA BARIS INI
            $table->string('nama'); // Kolom untuk nama (tipe VARCHAR)
            $table->string('nim')->unique(); // Kolom untuk NIM (tipe VARCHAR) dan harus unik

            $table->timestamps(); // Ini membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
