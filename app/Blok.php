<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'tb_blok';

    protected $fillable = [
        'nama_blok',
        'kolom',
        'baris',
        'sisa_kapasitas',
    ];
}
