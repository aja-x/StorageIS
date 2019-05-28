<?php


namespace App\Services;

use DateTime;
use Exception;
use App\Gudang;

class GudangServices
{
    public function isExpired($id)
    {
        $gudang = Gudang::find($id);
        try {
            $tanggal_masuk = new DateTime($gudang->tanggal_masuk);
            $tanggal_sekarang = new DateTime(date('Y-m-d H:i:s'));
            if($gudang->tanggal_keluar != "") {
                $tanggal_sekarang = new DateTime($gudang->tanggal_keluar);
            }
            return ($tanggal_masuk->diff($tanggal_sekarang)->m < 3 && $gudang->tanggal_keluar == "") ? false : true;
        } catch (Exception $e) {
            return false;
        }
    }
}