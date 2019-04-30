<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsalKota extends Model
{
    protected $table = 'tb_asal_kota';

    protected $fillable = [
        'nama_kota',
    ];
}
