<?php


namespace App\Services;


use App\Blok;
use App\Gudang;
use App\Tumpukan;
use Illuminate\Support\Facades\DB;

class HomeServices
{
    public function getTotalBeras()
    {
        return Gudang::whereNull('tanggal_keluar')->sum('jumlah_karung');
    }

    public function getSisaKapasitas()
    {
        return Blok::select('sisa_kapasitas')->sum('sisa_kapasitas');
    }

    public function getTotalKapasitas()
    {
        $tumpukan = Tumpukan::first();
        return Blok::select('id')->count() * $tumpukan->maksimal_tumpukan * $tumpukan->banyak_karung;
    }
}
