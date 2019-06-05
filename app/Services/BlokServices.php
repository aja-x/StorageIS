<?php


namespace App\Services;


use App\BlokGudang;

class BlokServices
{
    public function getIdGudang($id_blok)
    {
        $blok_gudang = BlokGudang::select('id_gudang')
            ->join('tb_gudang', 'tb_blok_gudang.id_gudang', '=', 'tb_gudang.id')
            ->where('id_blok', '=', $id_blok)
            ->whereRaw('tb_gudang.tanggal_keluar IS NULL')
            ->get();
        return compact('blok_gudang');
    }
}
