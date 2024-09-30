<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'Kode_Customer',
        'Nama_Customer'
    ];

    public $timestamps = false;
    public $primaryKey = 'Kode_Customer';
    public $incrementing = false;
}
