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
        Schema::create('dijuals', function (Blueprint $table) {
            $table->char('NO_FAKTUR', length: 6);
            $table->char('KODE_BARANG', length: 10);
            $table->integer('HARGA');
            $table->integer('QTY');
            $table->integer('DISKON');
            $table->integer('BRUTO');
            $table->integer('JUMLAH');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dijuals');
    }
};
