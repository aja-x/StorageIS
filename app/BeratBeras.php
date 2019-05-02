<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeratBeras extends Model
{
    protected $table = 'tb_jenis_berat_beras';

    protected $fillable = [
        'berat',
    ];
}
