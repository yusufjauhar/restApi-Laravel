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
        Schema::create('data_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku');
            $table->string('isbn');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->text('sekilas_isi');
            $table->date('tanggal_masuk');
            $table->integer('stock');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_buku');
    }
};
