<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlokGudang extends Model
{
    protected $table = 'tb_blok_gudang';

    protected $fillable = [
        'id_gudang',
        'id_blok',
        'jumlah_karung',
    ];
}
