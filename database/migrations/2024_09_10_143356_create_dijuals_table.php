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
            $table->int('HARGA', length: 15);
            $table->int('QTY', length: 15);
            $table->int('DISKON', length: 15);
            $table->int('BRUTO', length: 15);
            $table->int('JUMLAH', length: 15);
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
