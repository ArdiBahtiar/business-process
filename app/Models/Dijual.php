<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dijual extends Model
{
    use HasFactory;

    protected $fillable = [
        'NO_FAKTUR',
        'KODE_BARANG',
        'HARGA',
        'QTY',
        'DISKON',
        'BRUTO',
        'JUMLAH'
    ];

    public $timestamps = false;
}
