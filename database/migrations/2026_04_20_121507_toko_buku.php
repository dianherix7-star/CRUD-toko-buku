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
        Schema::create('toko_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('genre');
            $table->integer('tahun_terbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko_buku');
    }
    
};
