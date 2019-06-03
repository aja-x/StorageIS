<?php


namespace App\Services;
use App\Gudang;
use DateTime;
use Exception;

class NotificationServices
{
    public function navbarNotification()
    {
        $gudang = Gudang::whereRaw('tanggal_masuk + INTERVAL 3 MONTH < CURRENT_TIMESTAMP AND tanggal_keluar IS NULL')->get();
        return compact('gudang');
    }

    public function countNavbarNotification()
    {
        $gudang = Gudang::whereRaw('tanggal_masuk + INTERVAL 3 MONTH < CURRENT_TIMESTAMP AND tanggal_keluar IS NULL')->count();
        return $gudang;
    }

    public function countDiffDate($tgl)
    {
        try {
            $tanggal_masuk = new DateTime($tgl);
            $tanggal_sekarang = new DateTime(date('Y-m-d H:i:s'));
            return $tanggal_masuk->diff($tanggal_sekarang)->format("%a");
        } catch (Exception $e) {
            return "Error";
        }
    }

    public function ymdToDmy($tgl)
    {
        return date('d-m-Y H:i:s', strtotime($tgl));
    }

}
