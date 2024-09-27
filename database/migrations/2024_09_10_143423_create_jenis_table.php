<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jenis', function (Blueprint $table) {
            $table->char('KODE_TJEN', length: 1);
            $table->char('NAMA_TJEN', length: 10);
        });

        DB::table('jenis')->insert([
            ['KODE_TJEN' => 'T', 'NAMA_TJEN' => 'TERIMA'],
            ['KODE_TJEN' => 'J', 'NAMA_TJEN' => 'JUAL'],
            ['KODE_TJEN' => 'R', 'NAMA_TJEN' => 'RETUR'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis');
    }
};
