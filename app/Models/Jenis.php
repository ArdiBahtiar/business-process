<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $fillable = [
        'KODE_TJEN',
        'NAMA_TJEN'
    ];

    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = 'KODE_TJEN';
}
