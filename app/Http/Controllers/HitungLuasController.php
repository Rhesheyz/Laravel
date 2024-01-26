<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungLuasController extends Controller
{
    public function persegi($sisi)
    {
        $luas = $sisi * $sisi;
        return "Luas persegi dengan sisi $sisi adalah $luas";
    }

    public function persegiPanjang($panjang, $lebar)
    {
        $luas = $panjang * $lebar;
        return "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas";
    }

    public function segitiga($alas, $tinggi)
    {
        $luas = 0.5 * $alas * $tinggi;
        return "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas";
    }

    public function lingkaran($radius)
    {
        $luas = 3.14 * $radius * $radius;
        return "Luas lingkaran dengan radius $radius adalah $luas";
    }
}
