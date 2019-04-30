<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlokDetail extends Model
{
    protected $table = 'tb_blok_detail';

    protected $fillable = [
        'id_blok',
        'kolom',
        'baris',
    ];

    public $timestamps = false;
}
