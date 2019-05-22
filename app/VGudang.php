<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VGudang extends Model
{
    protected $table = 'v_gudang';

    protected $fillable = [
        'nama_kota',
        'nama_jenis',
        'jenis_kualitas',
        'berat',
        'id_asal_kota',
        'id_jenis_beras',
        'id_kualitas_beras',
        'id_jenis_berat_beras',
        'jumlah_karung',
    ];
}
