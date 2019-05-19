<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tumpukan extends Model
{
    protected $table = 'tb_tumpukan';

    protected $fillable = [
        'maksimal_tumpukan',
        'banyak_karung',
    ];

    public $timestamps = false;
}
