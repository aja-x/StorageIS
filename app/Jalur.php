<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    protected $table = 'tb_jalur';

    protected $fillable = [
        'nama_blok',
        'jalur',
    ];
}
