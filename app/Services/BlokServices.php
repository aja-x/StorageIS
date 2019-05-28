<?php


namespace App\Services;


use App\BlokGudang;

class BlokServices
{
    public function getIdGudang($id_blok)
    {
        $blok_gudang = BlokGudang::select('id_gudang')->where('id_blok', '=', $id_blok)->get();
        return compact('blok_gudang');
    }
}