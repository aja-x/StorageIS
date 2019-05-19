<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'tb_gudang';

    protected $fillable = [
        'id_asal_kota',
        'id_jenis_beras',
        'id_kualitas_beras',
        'id_jenis_berat_beras',
        'jumlah_karung',
    ];
}
