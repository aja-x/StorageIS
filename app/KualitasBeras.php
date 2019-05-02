<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KualitasBeras extends Model
{
    protected $table = 'tb_kualitas_beras';

    protected $fillable = [
        'jenis_kualitas',
    ];
}
