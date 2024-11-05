<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeuangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'pendapatan_tahunan',
        'laba_bersih',
        'rasio_utang',
        'tingkat_resiko',
    ];
}
