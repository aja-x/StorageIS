<?php


namespace App\Services;

use App\VBlokGudang;
use DateTime;
use Exception;
use App\Gudang;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function qrValue($gudang)
    {
        $res[] = $gudang['id'];
        $res[] = $gudang['nama_kota'];
        $res[] = $gudang['nama_jenis'];
        $res[] = $gudang['jenis_kualitas'];
        $res[] = $gudang['berat'];
        $res[] = $gudang['jumlah_karung'];
        $res[] = $gudang['tanggal_masuk'];

        $blok_gudang = VBlokGudang::where('id_gudang', '=', $gudang['id'])->get();
        $detail_gudang = [];
        foreach ($blok_gudang as $item) {
            $item_arr[] = $item->nama_blok . " " . $item->kolom . " ". $item->baris;
            $item_arr[] = $item->jumlah_karung;
            $item_arr[] = $item->jalur;
            $detail_gudang[] = implode('_', $item_arr);
            $item_arr = [];
        }
        $res[] = implode('##', $detail_gudang);
        $imagename = $gudang['id'] . "_" . time();
        QrCode::format('png')->size(250)
            ->generate(implode("\n", $res), storage_path("app/public/qr_code/" . $imagename . ".png"));

        $last_gudang = Gudang::find($gudang['id']);
        $last_gudang->qr_code = $imagename . ".png";
        $last_gudang->update();
    }
}
