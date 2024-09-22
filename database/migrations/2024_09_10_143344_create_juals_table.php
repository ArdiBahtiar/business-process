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
        Schema::create('juals', function (Blueprint $table) {
            $table->id();
            $table->char('NO_FAKTUR', length: 6);
            $table->char('Kode_Customer', length: 4);
            $table->char('KODE_TJEN', length: 1);
            $table->date('TGL_FAKTUR');
            $table->integer('TOTAL_BRUTO');
            $table->integer('TOTAL_DISKON');
            $table->integer('TOTAL_JUMLAH');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juals');
    }
};
