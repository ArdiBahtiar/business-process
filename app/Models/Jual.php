<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    use HasFactory;

    protected $fillable = [
        'NO_FAKTUR',
        'Kode_Customer',
        'KODE_TJEN',
        'TGL_FAKTUR',
        'TOTAL_BRUTO',
        'TOTAL_DISKON',
        'TOTAL_JUMLAH'
    ];

    public $timestamps = false;
}
