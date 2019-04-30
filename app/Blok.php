<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'tb_blok';

    protected $fillable = [
        'nama_blok',
        'kapasitas_blok',
        'sisa_kapasitas_blok',
    ];
}
