<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBeras extends Model
{
    protected $table = 'tb_jenis_beras';

    protected $fillable = [
        'nama_jenis',
    ];
}
