<?php

namespace App\Services;

class BlockService
{
    public function getJalurArrays($array, $banyak_blok)
    {
        for($i = 1; ($i - 1 == $banyak_blok); $i++) {
            if($banyak_blok % 2 == 0 && $i % 2 == 0)
                array_push($array, chr(64 + $i));
            else if($banyak_blok % 2 != 0 && $i % 2 != 0)
                array_push($array, chr(64 + $i));
        }
        return $array;
    }
}